<?php

use src\database\Database;

function makeNewMember()
{
    if (isset($_POST['submit'])) {
        require "../common.php";
        include "../src/Functions/addToTable.php";
        require_once '../src/DBconnect.php';

        // Data for the person table
        $new_person = array(
            "name" => escape($_POST['name']),
            "address" => escape($_POST['address']),
            "ph_no" => escape($_POST['ph_no']),
            "age" => escape($_POST['age']),
            "dob" => escape($_POST['dob'])
        );

        Database::addToTable($connection, $new_person, "person");

        // Get person_id
        $person_id = Database::getKey($connection, "person", "person_id");

        // Date for the customer table
        $new_customer = array(
            "person_id" => $person_id,
            "passport_no" => escape($_POST['passport_no'])
        );

        Database::addToTable($connection, $new_customer, "customer");
        // Get customer_id
        $customer_id = Database::getKey($connection, "customer", "customer_id");

//        Data for the login table
        $new_login = array(
            "email" => escape($_POST['email']),
            "password" => escape($_POST['password'])
        );

        Database::addToTable($connection, $new_login, "login");
        // Get login_id
        $login_id = Database::getKey($connection, "login", "login_id");

//        Date for the member table
        $new_member = array(
            "customer_id" => $customer_id,
            "login_id" => $login_id
        );

        Database::addToTable($connection, $new_member, "member");
    }

    if (isset($_POST['submit'])) {
        echo $new_person['name'] . ' successfully added';
    }
}
?>