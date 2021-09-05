<!-- 
    Woche: Tag05 
    Datum: 21.05.2021
    Datei: DatabaseTest.php
    Autor: Darius
    Beschreibung: Verbindung zur Datenbank testen mit simpler Abfrage
-->
<?PHP

// Achtung: Ohne Werte in der Datenbank keine Rückgabe
include 'datenbankverbindung.php';

$databaseObject = getDatabase();

$result = $databaseObject->query("SELECT * FROM verkehrsmittel");

$rows = $result->fetchAll(PDO::FETCH_ASSOC); // FETCH_NUM gibt die Jeweilige Nummer (index) bsp: fahrzeug = 1 und co2Wert = 2

foreach($rows as $row)
{
    echo "<br>";
    printf("{$row['co2Wert']} {$row['fahrzeug']}");
}

?>