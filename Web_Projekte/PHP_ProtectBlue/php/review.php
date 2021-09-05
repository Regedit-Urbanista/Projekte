<!-- 
    Woche: Tag04 
    Datum: 14.05.2021
    Datei: ErneuerbareEnergien.php
    Autor: Darius
    Beschreibung: Infobereich zu erneuerbaren Energien
-->
<table style="width: 100%">
    <tr>
        <div style="text-align:center">
            <?php
            // Einbinden externer Funktionen
            include '../www/datenbankverbindung.php';
            include '../www/getuserid.php';
            ?>

            <!-- Erste Methode -->
            <form method="post" action="review.php">
                <textarea name="userReview" rows="5" cols="40"></textarea>
                <br><br>
                <input type="submit" name="submit" value="Insert">
                <br><br><br><br>
            </form>
        </div>
    </tr>


    <div id="phpDiv">
        <?php
        if (isset($_POST['userReview'])) {
            // Verbindung zu DB
            $dataBase = getDatabase();
            $userName = $_SESSION['userName'];
            $userID = $_SESSION['userID'];

            // Eingabe der Review mit beigabe der userID
            if (strlen($_POST['userReview']) > 5 && strlen($userName) > 1) {
                $insert = $dataBase->prepare('INSERT INTO review(FK_userID, review) VALUES (:userID, :review)');
                $insert->execute([
                    ':userID' => getUserID($userName, $dataBase, $userID),
                    ':review' => (string)$_POST['userReview']
                ]);
            } 
            else 
            {
                if(strlen($_POST['userReview']) < 5){
                    echo "<div style=\"text-align: center;\">Text muss mindestens 50 Zeichen lang sein</div>";
                }
                else
                {
                    echo "<div style=\"text-align: center;\">Muss mit bekanntem User angemeldet sein!!</div>";
                }
            }
            $dataBase = NULL;
        }
        ?>
    </div>

    <tr>
        <td style="width:20%; text-align:center; vertical-align:top">
            <p>Reviews Suchen</p>
            <form method="post" action="review.php">
                <select name="choosenField">
                    <option value="myEntries">Meine Reviews</option>
                    <option value="allEntries">Alle Reviews</option>
                </select>
                <br>
                <input name="numberReviews" type="range" min="1" max="10" value="5" class="slider" id="rangeSlider">
                <br><br>
                <input type="submit" name="submit" value="Search">
            </form>
        </td>

        <td>
            <!-- Ausgabe der vom Nutzer erstllten Reviews -->
            <div id="ReviewDiv">
                <p>Eigene Reviews</p>
                <hr style="width:75%;" align="left">
                <br>
                <?php
                if (isset($_POST['choosenField']) && isset($_POST['numberReviews'])) {
                    $dataBase = getDatabase();
                    $userName = $_SESSION['userName'];
                    $userID = $_SESSION['userID'];
                    $results;

                    // Je nach Eingaben
                    if ($_POST['choosenField'] == 'myEntries' && strlen($userName) > 1) {
                        // Kleiner trick um die 5 "neusten" einträge zu bekommen. (einfach nach ID sortieren)"
                        $reviews = $dataBase->prepare('SELECT review, userName FROM review JOIN userlogin ON review.FK_userID = userlogin.userID WHERE review.FK_userID = :userID ORDER BY reviewID DESC LIMIT :entries');
                        $reviews->execute([
                            ':userID' => getUserID($userName, $dataBase, $userID),
                            ':entries' => (int)$_POST['numberReviews']
                        ]);
                        $results = $reviews->fetchALL();
                    }
                    else if($_POST['choosenField'] == 'allEntries'){
                        $reviews = $dataBase->prepare('SELECT review, userName FROM review JOIN userlogin ON review.FK_userID = userlogin.userID ORDER BY reviewID DESC LIMIT :entries');
                        $reviews->execute([
                            ':entries' => (int)$_POST['numberReviews']
                        ]);
                        $results = $reviews->fetchALL();
                    }

                    // Ausgabe 5 Neuste User Reviews des Benutzers
                    foreach ($results as $text) {
                        printf("{$text['review']}");
                        echo "<br>Autor: ";
                        printf("{$text['userName']}");
                        echo "<br><hr style=\"width:75%\" align=\"left\"><br>";
                    }
                }
                ?>
            </div>
        </td>
    </tr>
</table>