<?php
namespace src\database;

use PDO;
use PDOException;
require "../common.php";
require_once '../src/DBconnect.php';

class Database{

    
    //Update this with the correct details for your own DB
    
    private $host = "localhost"; // Database host
    private $dbname = "HotelTallafornia"; // Database name
    private $username = "root"; // Database username
    private $password = "root"; // Database password
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

    // Add an array to a table
    public static function addToTable($connection, $inputArray, $tableName)
    {
        require "../common.php";
//        include "../src/Functions/addToTable.php";
        require_once '../src/DBconnect.php';

        try {
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "$tableName",
                implode(", ", array_keys($inputArray)),
                ":" . implode(", :", array_keys($inputArray))
            );
            $statement = $connection->prepare($sql);
            $statement->execute($inputArray);
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
// https://www.php.net/manual/en/pdostatement.fetchobject.php
//  Get a key from a table
    public static function getKey($connection, $tableName, $primaryKey)
    {
        require_once '../src/DBconnect.php';
        try {
            $sql = "SELECT MAX(" . $primaryKey . ") FROM " . $tableName;
            $statement = $connection->prepare($sql);
            $statement->execute();
            $result_array = $statement->fetch(PDO::FETCH_ASSOC);
            $result = $result_array ["MAX(" . $primaryKey . ")"];
            return $result;
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
}
?>


