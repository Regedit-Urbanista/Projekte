<?php


class AusgabeController
{
    public function index()
    {
        try {
            $pdo = db();
            $statement = $pdo->prepare('SELECT * FROM personalien JOIN werkzeug ON personalien.FK_werkzeugID = werkzeug.WerkzeugID WHERE personalien.status = 0  ORDER BY dringlichkeit DESC');
            $statement->execute();
            $result = $statement->fetchAll();
        }
        catch (PDOException $e) {
            die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
        }
        require 'app/Views/ausgabe.view.php';

    }

}