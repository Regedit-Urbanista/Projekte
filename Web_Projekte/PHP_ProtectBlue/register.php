<!-- 
    Woche: Tag04 
    Datum: 14.05.2021
    Datei: login.php
    Autor: Lapis
    Beschreibung: Registrierungs-Fenster
-->
<?php include('datenbankverbindung.php'); ?>

<div>
    <form action="index.php?page=register" method="post">
        <table>
            <tr>
                <th>Pers&ouml;nliche Daten</th>
                <td><label for="username">Username:</label></td>
                <td><input id="username" name="username" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><label for="password">Passwort:</label></td>
                <td><input id="password" name="password" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><label for="password">Passwort:</label></td>
                <td><input id="password" name="password" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><label for="email">E-Mail:</label></td>
                <td><input id="email" name="email" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><label for="alter">Alter:</label></td>
                <td><input id="alter" name="alter" value="" required></td>
            </tr>
            <tr>
                <th></th>
                <td><button type="submit">Registrieren</button></td>
                <td><button type="reset">Clear</td>
            </tr>
        </table>
    </form>
</div>

<?php
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['alter'])) {

    $pdo = getDatabase();

    $pre = $pdo->prepare("SELECT * FROM userlogin INNER JOIN email ON email.emailID = userlogin.FK_emailID WHERE userName = ? OR email = ?;");
    $pre->execute([$_POST['username'], $_POST['email']]);
    $arr = $pre->fetch(PDO::FETCH_ASSOC);

    if (!$arr) {
        $insertEmail = $pdo->prepare("INSERT INTO email (email) VALUES (?);");
        $insertEmail->execute([$_POST['email']]);

        $getEmailID = $pdo->prepare("SELECT emailID FROM email WHERE email = ?;");
        $getEmailID->execute([$_POST['email']]);
        $EmailID = $getEmailID->fetch(PDO::FETCH_ASSOC);

        $insertUser = $pdo->prepare("INSERT INTO userlogin (userName, FK_emailID,
        userPassword, userAlter) VALUES (?, ?, ?, ?);");
        $insertUser->execute(
            [
                $_POST['username'],
                $EmailID['emailID'],
                password_hash($_POST['password'], PASSWORD_DEFAULT),
                $_POST['alter']
            ]
        );

        echo "Erfolgreich registriert";

        header("Location: index.php?page=registersuccess");
        
    } else {
        echo "Es ist bereits ein User mit diesem Benutzernamen oder E-Mail registiert.<br>
        Bitte wählen sie etwas anderes!";
    }
    $pdo = null;
}
?>