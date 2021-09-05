<form action="luftverschmutzung.php" method="post">
<!--  
    Woche: TagXX  
    Datum: 04.06.2021 
    Datei: luftverschmutzung.php 
    Autor: Darius 
    Beschreibung: Text
--> 
    <h1>Luftverschnutzung</h1>
    <p>Die Luftverschmutzung ist eines der grössten Umweltprobleme unserer Zeit. Autos, Landwirtschaft, Flugzeuge und ganz besonders die Industrie verseuchen die Luft, die wir atmen. Wirklich reine Luft gibt es nirgendwo mehr. Auch wenn die Luftverschmutzung in Großstädten ganz besonders hoch ist, kennt dieses Umweltproblem keine Grenzen. Wind und Wetter treiben die Schadstoffe auch in sauber-scheinende, ländliche Regionen. Die Verunreinigung der Luft hat globale Folgen. Deshalb geht dieses Umweltproblem uns alle etwas an.
        <br> In diesem Artikel möchte ich dir neben der Definition auch Statistiken, Ursachen, Folgen und Lösungsansätze im Kampf gegen die Luftverschmutzung zeigen.
    </p>
    <br>
    <h2>Ursagen der Luftverschmutzung</h2>
    <p>Wir wissen, dass wir die Luft, die wir einatmen, mit Schadstoffen belasten. Doch inwiefern machen wir das? Um herauszufinden, was wir gegen die Luftverschmutzung unseres Planeten tun können, müssen sollten wir auch die Ursachen dieses Umweltproblems genauer kennenlernen.</p>
    <p>Durch die folgenden Dinge tragen wir zur Verunreinigung der Luft bei:</p>
    <p><b>Verkehr: </b>Im Straßenverkehr entsteht nicht nur Mikroplastik, sondern ein entscheidender Teil der klimaschädlichen Treibhausgase. Diesel-Autos stoßen besonders viel Stickstoffdioxid aus – der Großteil davon ist auf Diesel-Pkw's und Nutzfahrzeuge zurückzuführen. </p>
    <p><b>Industrie: </b>In der Industrie wird vor allem Schwefeldioxid, Kohlendioxid sowie Feinstaub ausgestoßen. Dies geschieht zum Beispiel im Bergbau, bei der Herstellung von Konsumgütern oder auch in der Pharma- und Düngemittel-Industrie.</p>
    <p><b>Landwirtschaft: </b>In Deutschland wurden 2016 mehr als 50% der Methan-Emissionen und 95% der Ammoniak-Emmisionen durch die Landwirtschaft verursacht. Besonders die Viehhaltung trägt entscheidend zum Ausstoß des Methans in der Landwirtschaft bei.</p>
    <p><b>Haushalte: </b>Die steigende Anzahl an Haushaltsgeräten (Fernseher, Laptop, Smartphone, Kühlschränke) und generell Ein-Personen-Haushalten (höhere Heizkosten pro m²) belastet unsere Luft zunehmend – direkt und indirekt. Natürlich spielt auch die erhöhte Anzahl eine entscheidende Rolle am Anteil der Haushalte an der Luftverschmutzung. </p>
    <p><b>Natürliche Ursachen: </b>Einen geringen Anteil an der Luftverschmutzung können auch natürliche Ereignisse wie ein Vulkanausbruch, Waldbrände oder gewöhnlicher Pollenflug haben. Das möchte ich nicht vergessen, auch wenn der Anteil verschwindend gering ist.</p>
    <p>Während die Industrie hauptsächlich Schwefeloxide und CO2 in die Umwelt bläst, ist der Verkehr besonders für die Bildung von Stickstoffoxiden und Kohlenmonoxid verantwortlich. Die Landwirtschaft hat ebenfalls einen entscheidenden Anteil daran, dass Stickoxide aber auch Ammoniak und Methan in die Atmosphäre gelangen.</p>
    <h2>Folgen der Luftverschmutzung</h2>
    <p>Wie wir mit unserer Luft umgehen, bleibt natürlich nicht ohne Folgen. Auch wenn die Luftverschmutzung in Deutschland grundsätzlich rückläufig ist, leiden Mensch & Umwelt in vielen Entwicklungsländer ganz besonders unter dem Smog. Das Umweltproblem, dass fast ausschließlich durch uns Menschen verursacht wird, schadet schlussendlich unserer eigenen Gesundheit und auch unserer Umwelt.</p>
    <a href="https://www.careelite.de/luftverschmutzung/" target="_blank">Quelle</a>
    <br><br>

<!--  
    Woche: TagXX  
    Datum: 28.05.2021 
    Datei: luftverschmutzung.php 
    Autor: Filipa Fernandes Moreira 
    Beschreibung: Bewertung ohne Durchschnitt
--> 

    <h4>Bewerten Sie diesen Artikel</h4>
    <label for="bewertung">Bewertung: </label><br>
    <input type="bewertung" id="bewertung" name="bewertung" placeholder="Bewetung 1-5" pattern="[1-5]" required><br>
    <input type="submit" value="Submit">
</form>

<?PHP
// um die Verbindung zu erhalten
include "../www/datenbankverbindung.php";     
// 1 user hinzugefügt
$userName = 'Darius';
// bewertung hinzufügen (sql)
$databaseConnection = getDatabase();
$sqlqueryInsertBewertung = "INSERT INTO bewertung (FK_userID, FK_serviceID, bewertung) VALUES (:userID, 1, :e_bewertung)";
$statement = $databaseConnection->prepare($sqlqueryInsertBewertung);
if (isset($_POST['bewertung'])) {
    $statement->execute([
        ':e_bewertung' => ($_POST['bewertung']),
        ':userID' => 1
    ]);
}

/*
    Woche: TagXX  
    Datum: 11.06.2021 
    Datei: file.php 
    Autor: Filipa Fernandes Moreira
    Beschreibung: Durchschnitt 
*/
$sqlqueryRound = 'SELECT ROUND(AVG(bewertung), 1) FROM bewertung';
$statement = $databaseConnection->prepare($sqlqueryRound);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo "Durchschnitt der Bewertung: ";
echo $row["ROUND(AVG(bewertung), 1)"];
?>