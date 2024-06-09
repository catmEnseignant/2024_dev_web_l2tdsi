<?php

/**
 * Class DatabaseConneXion
 * Gère la connexion à une base de données MySQL en utilisant PDO.
 */
class DatabaseConnexion
{
    private $host = 'localhost';
    private $dbname = 'testDB'; // Modifiez le Nom de la base de données
    private $username = 'SALOMON'; // Modifie le Nom d'utilisateur pour la connexion à la base de données
    private $password = 'S@lomon1501'; // Modifiez le Mot de passe pour la connexion à la base de données
    private $conn;
    /**
     * Établit une connexion à la base de données.
     * @return PDO|null
     */
    public function __construct()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Erreur de connexion: " . $e->getMessage();
        }
    }
    /**
     * Exécute une requête SQL avec des paramètres facultatifs.
     * @param string $query La requête SQL à exécuter.
     * @param array $params Les paramètres à lier à la requête.
     * @return PDOStatement|null
     */
    public function executeQuery($query, $params = [])
    {
        try {
            $request = $this->conn->prepare($query);
            $request->execute($params);
            return $request;
        } catch (PDOException $e) {
            echo "Erreur de connexion: " . $e->getMessage();
            return null;
        }
    }
}