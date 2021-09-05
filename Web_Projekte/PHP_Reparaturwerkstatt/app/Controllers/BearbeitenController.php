<?php
    abstract class Dringlichkeit
    {
        const sehrTief = 0;
        const tief = 1;
        const normal = 2;
        const hoch = 3;
        const sehrHoch = 4;

        static function asArray() {
            $dinglichkeiten = array(
                [ 'id' => Dringlichkeit::sehrTief, 'name' => 'Sehr tief' ],
                [ 'id' => Dringlichkeit::tief, 'name' => ' Tief' ],
                [ 'id' => Dringlichkeit::normal, 'name' => 'Normal' ],
                [ 'id' => Dringlichkeit::hoch, 'name' => 'Hoch' ],
                [ 'id' => Dringlichkeit::sehrHoch, 'name' => 'Sehr hoch' ],
            );
            return $dinglichkeiten;
        }
    }

class BearbeitenController
{

    public function index()
    {
        try {
            $pdo = db();

            $statement = $pdo->prepare('SELECT * FROM werkzeug');
            $statement->execute();

            $resultat = $statement->fetchAll();
        }
        catch (PDOException $e) {
            die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
        }


        try {
            $personalienID = $_GET['id'];
            $pdo = db();

            $statement = $pdo->prepare('SELECT * FROM personalien WHERE personalienID=:personalienID');
            $statement->bindParam('personalienID', $personalienID);
            $statement->execute();

            $res = $statement->fetchAll()[0];
//            var_dump($res);


        }
        catch (PDOException $e) {
            die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
        }

        require 'app/Views/bearbeiten.view.php';
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
                    $this->update();
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


    function update()
    {




        $personalienID = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefonnummer = $_POST['telefon'];
        $status = $_POST['status'];
        $FK_werkzeugID = $_POST['werkzeug'];

        var_dump($personalienID);

        $pdo = db();
        $statement = $pdo->prepare('UPDATE personalien SET name = :name, email = :email, telefonnummer = :telefonnummer, status = :status, FK_werkzeugID = :FK_werkzeugID WHERE personalienID = :personalienID ');
        $statement->bindParam('personalienID', $personalienID);
        $statement->bindParam('name', $name);
        $statement->bindParam('email', $email);
        $statement->bindParam('telefonnummer', $telefonnummer);
        $statement->bindParam('status', $status);
        $statement->bindParam('FK_werkzeugID', $FK_werkzeugID);

        $statement->execute();


        $this->index();


    }



}