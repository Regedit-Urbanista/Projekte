<!--
Woche: Tag08
Datum: 11.06.2021 
Datei: newsletter.php 
Autor: Darius
Beschreibung: Newsletter
-->

<form action="Newsletter.php" method="POST">
    <label for="email">E-Mail</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="name">Nutzername</label><br>
    <input type="name" id="name" name="name"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear"><br>
</form>

<?PHP
include "../www/datenbankverbindung.php"; // um die Verbindung zu erhalten

// prüft ob eine Email bereits vorhanden ist, falls ja -> ture, falls nein -> false
function checkIfEmailExist()
{
    $databaseConnection = getDatabase();
    $sqlqueryCheckExistingEmail = "SELECT email.email FROM email WHERE email.email = (:e_mail)";
    $statement = $databaseConnection->prepare($sqlqueryCheckExistingEmail);
    $statement->bindParam(':e_mail', $_REQUEST['email']);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

// fügt eine eingegebene Email in die Tabelle: Email ein
function InsertEmail()
{
    $databaseConnection = getDatabase();
    $sqlqueryInsertEMail = "INSERT INTO email (email) VALUES (:e_mail)";
    $statement = $databaseConnection->prepare($sqlqueryInsertEMail);
    $statement->bindParam(':e_mail', $_REQUEST['email']);
    $statement->execute();

    InsertName($databaseConnection);
}

// fügt die vorhing eingebenene Email und auch optional den Namen in die Tabelle: newsletter ein
function InsertName(PDO $databaseConnection)
{
    $lastInsert = $databaseConnection->lastInsertId();
    $sqlqueryInsertID = "INSERT INTO newsletter (FK_emailID, vorname) VALUES ($lastInsert, :l_name)";
    $statement = $databaseConnection->prepare($sqlqueryInsertID);
    $statement->bindParam(':l_name', $_REQUEST['name']);
    $statement->execute();
}

try {
    $databaseConnection = getDatabase();
    if (isset($_REQUEST['email'])) {
        if (!checkIfEmailExist()) {
            InsertEmail();
        } else {
            echo "Diese Email wurde bereits hinzugefügt";
        }
    }
} catch (Exception $error) {
    error_log($error->getMessage());
}

?>
