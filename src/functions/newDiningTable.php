<?php

use hotel\diningTable;
use src\database\Database;

error_reporting(E_ALL);
ini_set('display_errors', 1);


include '../src/hotel/diningTable.php';
include '../src/database/Database.php';

function addNewDiningTable()
{

    $diningTableTable = 'restuaruantTables';

    if (isset($_POST['submit'])) {

        // Retrieve POST data
        $table_id = $_POST['table_id'];
        $capacity = $_POST['capacity'];


        // Create a new dining Table object
        $diningTable = new diningTable($table_id, $capacity);

        //create the conection
        $connection = new Database();

        //call the insert to DB Function Here      
        $connection->insert($diningTableTable, $diningTable->diningTableArray());


        echo "Table data stored successfully!";


    }


}
