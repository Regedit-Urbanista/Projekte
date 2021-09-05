<!-- 
    Woche: Tag04 
    Datum: 14.05.2021
    Datei: login.php
    Autor: Lapis
    Beschreibung: Login-Fenster
-->

<?php include('datenbankverbindung.php'); ?>

<div>
    <form action="index.php?page=login" method="post">
        <table>
            <tr>
                <th>Pers&ouml;nliche Daten</th>
                <td><label for="username">Username:</label></td>
                <td><input id="username" name="username" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><label for="password">Passwort:</label></td>
                <td><input type="password" id="password" name="password" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><button type="submit">Absenden</button></td>
                <td><button type="reset">Clear</td>
            </tr>
        </table>
    </form>
</div>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {

    $pdo = getDatabase();

    $pre = $pdo->prepare("SELECT * FROM userlogin WHERE userName = ?");
    $pre->execute([$_POST['username']]);
    $arr = $pre->fetch(PDO::FETCH_ASSOC);

    if ($arr) {
        if (password_verify($_POST['password'], $arr['userPassword'])) {
            $_SESSION['userName'] = $arr['userName'];
            $_SESSION['userID'] = $arr['userID'];
            header("Location: index.php?page=login");
        } else {
            echo "Username oder Passwort falsch!<br>";
        }
    }

    $pdo = null;
}

if (isset($_SESSION['userName']) && isset($_SESSION['userID'])) {
    echo "Eingeloggt!";
}
?>