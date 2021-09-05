<!-- 
    Woche: Tag05 
    Datum: 11.06.2021
    Datei: co2Rechner.php
    Autor: Darius
    Beschreibung: Hauptfunktion meiner Arbeit
-->
<Doctype html>
    <html lang="de">

    <head>
        <meta charset="UTF-8">
        <title>Mit dme Wandel der Zeit</title>
    </head>

    <body>

        <?php

        include "../www/datenbankverbindung.php";     // um die Verbindung zu erhalten

        // define variables and set to empty values
        $co2WertFahzrzeugErr = $fahrzeuggewonheitenErr = $auswahlErr = $essgewonheitenErr = $co2WertNahrungsmittelErr = "";
        $co2WertFahrzeug = $fahrzeuggewonheiten = $auswahl = $essgewonheiten = $co2WertNahrungsmittel = "";



        if ($_SERVER["REQUEST_METHOD"] == "POST") {


             //Eingabe der fahrzeuggewonheiten
             if (empty($_POST["fahrzeuggewonheiten"])) {
                $fahrzeuggewonheitenErr = "fahrzeuggewonheiten muss angegeben werden";
            } else {
                $fahrzeuggewonheiten = eingabe($_POST["fahrzeuggewonheiten"]);
                //  Prüft die Zugelassenen Zeichen
                if (!preg_match("/^[a-zA-Z-' ]*$/", $fahrzeuggewonheiten)) {
                    $fahrzeuggewonheitenErr = "Bitte Nur Buchstaben eingeben";
                }
            }
            
            //Eingabe des co2 Werts Fahrzeug
            if (empty($_POST["co2WertFahrzeug"])) {
                $co2WertFahzrzeugErr = "Co2 Wert muss angegeben werden";
            } else {
                $co2WertFahrzeug = eingabe($_POST["co2WertFahrzeug"]);
                // Prüft die Zugelassenen Zeichen
                if (!preg_match("/^[0-9]*$/", $co2WertFahrzeug)) {
                    $co2WertFahzrzeugErr = "Bitte nur Zahlen eingeben";
                }
            }

           

            //Eingabe der essgewonheiten
            if (empty($_POST["essgewonheiten"])) {
                $essgewonheiten = "";
            } else {
                $essgewonheiten = eingabe($_POST["essgewonheiten"]);
                // Prüft die Zugelassenen Zeichen
                if (!preg_match("/^[a-zA-Z-' ]*$/", $essgewonheiten)) {
                    $essgewonheitenErr = "Bitte Nur Buchstaben eingeben";
                }
            }

            //Eingabe des co2 Werts Nahrung
            if (empty($_POST["co2WertNahrungsmittel"])) {
                $co2WertNahrungsmittel = "Co2 Wert muss angegeben werden";
            } else {
                $co2WertNahrungsmittel = eingabe($_POST["co2WertNahrungsmittel"]);
                // Prüft die Zugelassenen Zeichen
                if (!preg_match("/^[0-9]*$/", $co2WertNahrungsmittel)) {
                    $co2WertNahrungsmittelErr = "Bitte nur Zahlen eingeben";
                }
            }



            if (empty($_POST["auswahl"])) {
                $auswahlErr = "auswahl is required";
            } else {
                $auswahl = eingabe($_POST["auswahl"]);
            }
            

        }

        function eingabe($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <!-- Formular -->
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            Fahrzeuggewonheiten: <input type="text" name="fahrzeuggewonheiten" value="<?php echo $fahrzeuggewonheiten; ?>">
            <span class="error">* <?php echo $fahrzeuggewonheitenErr; ?></span>
            <br><br>
            co2WertFahrzeug: <input type="text" name="co2WertFahrzeug" value="<?php echo $co2WertFahrzeug; ?>">
            <span class="error">* <?php echo $co2WertFahzrzeugErr; ?></span>
            <br><br>
            Essgewonheiten: <input type="text" name="essgewonheiten" value="<?php echo $essgewonheiten; ?>">
            <span class="error">* <?php echo $essgewonheitenErr; ?></span>
            <br><br>
            co2WertNahrungsmittel: <input type="text" name="co2WertNahrungsmittel" value="<?php echo $co2WertNahrungsmittel; ?>">
            <span class="error">* <?php echo $co2WertNahrungsmittelErr; ?></span>
            <br><br>

            auswahl:
            <input type="radio" name="auswahl" <?php if (isset($auswahl) && $auswahl == " Ökologisch") echo "checked"; ?> value="Ökologisch">Ökologisch
            <input type="radio" name="auswahl" <?php if (isset($auswahl) && $auswahl == " Ökonomisch") echo "checked"; ?> value="Ökonomisch">Ökonomisch
            <input type="radio" name="auswahl" <?php if (isset($auswahl) && $auswahl == "ÖBB") echo "checked"; ?> value="ÖBB">ÖBB
            <span class="error">* <?php echo $auswahlErr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php

        eingabeFahrzeuggewonheiten();
        eingabeEssgewonheit();     


         //Eingabe Fahrzeuggewonheiten
        function eingabeFahrzeuggewonheiten()
        {
            $databaseConnection = getDatabase();
            $sqlAbfrage = "INSERT INTO verkehrsmittel (fahrzeug, co2Wert) VALUES (:fahrzeuggewonheiten, :co2WertFahrzeug)";
            $statement = $databaseConnection->prepare($sqlAbfrage);
            $statement->bindParam(':fahrzeuggewonheiten', $_REQUEST['fahrzeuggewonheiten']);
            $statement->bindParam(':co2WertFahrzeug', $_REQUEST['co2WertFahrzeug']);
            $statement->execute();
        }
        //Eingabe Essgewonheiten
        function eingabeEssgewonheit()
        {
            $databaseConnection = getDatabase();
            $sqlAbfrage = "INSERT INTO nahrung (nahrungsmittel, co2Wert) VALUES (:essgewonheiten, :co2WertNahrungsmittel)";
            $statement = $databaseConnection->prepare($sqlAbfrage);
            $statement->bindParam(':essgewonheiten', $_REQUEST['essgewonheiten']);
            $statement->bindParam(':co2WertNahrungsmittel', $_REQUEST['co2WertNahrungsmittel']);
            $statement->execute();
        }



        datenbankAusgabeFahrzeug();
        datenbankAusgabeNahrung();

        function datenbankAusgabeFahrzeug()
        {
            $databaseConnection = getDatabase();
            $sqlAbfrage = $databaseConnection->query("SELECT * FROM verkehrsmittel")->fetchAll();
            // und irgendwann später...
            foreach ($sqlAbfrage as $row) 
            {
             echo $row['fahrzeug']."\t";
             echo $row['co2Wert']."<br />\n";
            }
        }

        function datenbankAusgabeNahrung()
        {
            $databaseConnection = getDatabase();
            $sqlAbfrage = $databaseConnection->query("SELECT * FROM nahrung")->fetchAll();
            // folglich
            foreach ($sqlAbfrage as $row) 
            {
             echo $row['nahrungsmittel']."\t";
             echo $row['co2Wert']."<br />\n";
            }
        }



        echo "<h2>Ihre Eingabe:</h2>";
        echo $fahrzeuggewonheiten;
        echo "\t\t";
        echo $co2WertFahrzeug;
        echo "<br>";
        echo $essgewonheiten;
        echo "\t\t";
        echo $co2WertNahrungsmittel;
        echo "<br>";
        echo $auswahl;
        ?>

        

    </body>

    </html>