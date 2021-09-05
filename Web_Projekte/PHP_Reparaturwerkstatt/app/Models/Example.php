<?php
/**
 * Das Model "Example" implementiert alle grundlegenden Funktionen einer Datenbank-
 * Anwendung: load (SELECT), save (INSERT oder UPDATE) und delete (DELETE).
 */
class Example
{
    public int $id = 0;
    public string $name = '';

    /**
     * Der Konstruktor initialisiert alle Eigenschaften des Objekts
     * Für neue Datensätze kann die $id auf 0 gesetzt werden.
     */
    public function __construct(int $id, string $name): ?self
    {
        $this->id = $id;
        $this->name = $name;

        return $this;
    }

    /**
     * Datensatz mit gegebener ID von der Datenbank ins Objekt laden
     */
    public function find(int $id): ?self
    {
        $statement = db()->prepare('SELECT * FROM example WHERE id = :id LIMIT 1');
        $statement->bindParam(':id', $id);
        $statement->execute();
        $result = $statement->fetch();

        if ($result) {
            // Datensatz gefunden? Eigenschaften setzen und Objekt zurückgeben.
            $this->id = $result['id'];
            $this->name = $result['name'];

            return $this;
        }

        // Datensatz NICHT gefunden -> null zurückgeben.
        return null;
    }

    /**
     * Alle Datensätze aus der Datenbank laden.
     */
    public function getAll()
    {
        // Dein Code ...
    }

    /**
     * Erstellt einen neuen Eintrag in der Datenbank.
     */
    public function create(): int
    {
        // Dein Code...
    }
    
    /**
     * Aktualisiert die aktuellen Daten in der Datenbank.
     */
    public function update(): int
    {
        // Dein Code...
    }

    /**
     * Lösche einen Datensatz, entweder mit der angegebenen $id oder falls nicht angegeben, der aktuell geladene.
     */
    public function delete(int $id = 0): int
    {
        // Falls keine $id angegeben ist, lösche den aktuell geladenen ($this->id) des Objektes.
        if (!$id) {
            $id = $this->id;
        }

        if ($id > 0) {
            // Datensatz löschen (DELETE)
            // Dein Code ...
            
            // Gib die Anzahl der gespeicherten Datensätze zurück (1 = Erfolg, 0 = Fehler)
            // return $statement->rowCount();
        }

        return 0;
    }
}
