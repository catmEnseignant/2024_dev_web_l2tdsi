<?php
/**
 * Class CRUD
 * Fournit des opérations CRUD (Create, Read, Update, Delete) pour n'importe quelle table d'une base de données.
 */
class CRUD
{
    private $dbconnection;

    public function __construct($dbconnection)
    {
        $this->dbconnection = $dbconnection; 
    }

    /**
     * Crée une table en exécutant une requête SQL.
     * @param string $create_table_sql La requête SQL de création de table
     */
    public function createtable($create_table_sql)
    {
        // Exécute la requête de création de table
        $this->dbconnection->executeQuery($create_table_sql);
    }

    /**
     * Insère une nouvelle ligne dans une table.
     * @param string $table Le nom de la table
     * @param array $data Les données à insérer (associatif colonne => valeur)
     */
    public function create($table, $data)
    {
        // Génère les colonnes et les placeholders pour la requête SQL
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        // Exécute la requête d'insertion avec les valeurs fournies
        $this->dbconnection->executeQuery($sql, array_values($data));
    }

    /**
     * Lit des données d'une table.
     * @param string $table Le nom de la table
     * @param string $columns Les colonnes à sélectionner (par défaut '*')
     * @param string|null $conditions Les conditions pour filtrer les lignes (facultatif)
     * @return array Les lignes résultantes
     */
    public function read($table, $columns = '*', $conditions = null)
    {
        // Construit la requête de sélection
        $sql = "SELECT $columns FROM $table";
        if ($conditions) {
            $sql .= " WHERE $conditions";
        }
        // Exécute la requête et renvoie les résultats
        $stmt = $this->dbconnection->executeQuery($sql);
        return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
    }

    /**
     * Met à jour des lignes dans une table.
     * @param string $table Le nom de la table
     * @param array $data Les nouvelles données (associatif colonne => valeur)
     * @param string $conditions Les conditions pour spécifier quelles lignes mettre à jour
     */
    public function update($table, $data, $conditions)
    {
        // Génère la clause SET pour la requête de mise à jour
        $set_clause = implode(", ", array_map(fn($key) => "$key = ?", array_keys($data)));
        $sql = "UPDATE $table SET $set_clause WHERE $conditions";
        // Exécute la requête de mise à jour avec les nouvelles valeurs
        $this->dbconnection->executeQuery($sql, array_values($data));
    }

    /**
     * Supprime des lignes d'une table.
     * @param string $table Le nom de la table
     * @param string $conditions Les conditions pour spécifier quelles lignes supprimer
     */
    public function delete($table, $conditions)
    {
        // Construit la requête de suppression
        $sql = "DELETE FROM $table WHERE $conditions";
        // Exécute la requête de suppression
        $this->dbconnection->executeQuery($sql);
    }
}
?>