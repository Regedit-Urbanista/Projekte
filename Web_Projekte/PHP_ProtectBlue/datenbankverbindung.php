<!-- 
    Woche: Tag04 
    Datum: 14.05.2021
    Datei: DatenbankVerbindung.php
    Autor: Darius
    Beschreibung: Verbindung zur Datenbank erstellen
-->
<?PHP

// Funktion, um Databseverbindung zur Datenbank zu erstellen / erlangen
function getDatabase()
{
    $database = "mysql:host=localhost;dbname=protect_blue";
    $username = "root";
    $password = "";
    $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, 
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    ];

    try
    {
        $dataBaseConnection = new PDO($database, $username, $password, $options);
    }
    catch (PDOException $exeption)
    {
        print "Fehler" . $exeption->getMessage() . "<br/>";
    }
    
    return $dataBaseConnection;
}
?>