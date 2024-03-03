<?php
namespace src\database;

use PDO;
use PDOException;


class Database{
    
    //Update this with the correct details for your own DB
    
    private $host = "Emilys-MacBook-Pro-2.local"; // Database host
    private $dbname = "HotelTallafornia"; // Database name
    private $username = "root"; // Database username
    private $password = "Bl4ckb3rry!"; // Database password
    private $pdo; // PDO object for database connection

    // Constructor to establish database connection
    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    
    // Method to execute SQL queries
    public function executeQuery($sql, $params = []) {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query execution failed: " . $e->getMessage());
        }
    }
    

    public function insert($table, $data) {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->executeQuery($sql, $data);
    } 
    
    // Method to update data in a table
    public function update($table, $data, $condition) {
        $set = '';
        foreach ($data as $key => $value) {
            $set .= "$key = :$key, ";
        }
        $set = rtrim($set, ', ');
        $sql = "UPDATE $table SET $set WHERE $condition";
        $this->executeQuery($sql, $data);
    }
    
    // Method to delete data from a table
    public function delete($table, $condition) {
        $sql = "DELETE FROM $table WHERE $condition";
        $this->executeQuery($sql);
    }
    
    // Method to fetch data from a table
    public function select($table, $columns = '*', $condition = '', $params = []) {
        $sql = "SELECT $columns FROM $table";
        if (!empty($condition)) {
            $sql .= " WHERE $condition";
        }
        $stmt = $this->executeQuery($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>


