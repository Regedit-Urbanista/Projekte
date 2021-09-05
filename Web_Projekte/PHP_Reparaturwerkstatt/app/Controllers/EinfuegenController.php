<?php

abstract class Dringlichkeit
{

    const sehrTief = 0;
    const tief = 1;
    const normal = 2;
    const hoch = 3;
    const sehrHoch = 4;
}


class EinfuegenController
{
    public function index()
    {
        try {
            $pdo = db();

            $statement = $pdo->prepare('SELECT * FROM werkzeug');
            $statement->execute();

            $result = $statement->fetchAll();
        }
        catch (PDOException $e) {
            die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
        }


        require 'app/Views/form.view.php';
    }

    public function validation()
    {
        $alertCount = 0;
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {   $name = $_POST['name'] ?? "";
            if(empty(trim($name)))
            {
                $alertCount = 1;
                echo "<script>alert(\"Bitte geben Sie einen gültigen Namen ein!\");</script>";
            }

            $email = $_POST['email'] ?? "";
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $alertCount = 1;
                echo "<script>alert(\"Die E-Mail-Adresse ist ungültig!\");</script>";
            }

            if(!preg_match('/^[\+\-\/ 0-9]+$/', $_POST['telefon']) && strlen($_POST['telefon']) > 0)
            {
                $alertCount = 1;
                echo "<script>alert(\"Bitte geben Sie eine gültige Telefonnummer ein!\");</script>";
            }
            else
            {
                $phone = intval($_POST['telefon']);
                $phone = trim($_POST['telefon']);
            }

            $dringlichkeit = $_POST['dringlichkeit'] ?? "";
            if($dringlichkeit = NULL)
            {
                $alertCount = 1;
                echo "<script>alert(\"Bitte wählen Sie die Dringlichkeit!\");</script>";
            }

            $tool = $_POST['werkzeug'] ?? "";
            if(empty($tool))
            {
                $alertCount = 1;
                echo "<script>alert(\"Bittewählen Sie ein Werzeug!\");</script>";
            }

            $status = $_POST['status'] ?? "";
            if(empty($status))
            {
                $alertCount = 1;
                echo "<script>alert(\"Bitte geben Sie einen Status an!\");</script>";
            }
            if($alertCount == 0)
            {
                if ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    $this->add();
                }
            }
            else
            {
                $this->index();
            }
        }
        else
        {
            echo "<script>alert(\"Hier hat etwas nicht geklappt :-(\");</script>";
        }
    }

    public function add()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $dringlichkeit = $_POST['dringlichkeit'];
        $status = $_POST['status'];
        $FK_werkzeugID = $_POST['werkzeug'];

        $dateNow = new DateTime("Now");
        $datum = $dateNow->format("Y-m-d");

        $pdo = db();
        $statement = $pdo->prepare('INSERT INTO personalien (name, email, telefonnummer, dringlichkeit, datum, status, FK_werkzeugID) VALUES (:name, :email, :telefonnummer, :dringlichkeit, :datum, :status, :FK_werkzeugID)');
        $statement->bindParam('name', $name);
        $statement->bindParam('email', $email);
        $statement->bindParam('telefonnummer', $telefon);
        $statement->bindParam('dringlichkeit', $dringlichkeit);
        $statement->bindParam('datum', $datum);
        $statement->bindParam('status', $status);
        $statement->bindParam('FK_werkzeugID', $FK_werkzeugID);


        $statement->execute();


        $this->index();
    }


}