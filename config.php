<?php
/**
 * Configuration for database connection
 *
 */
$host = "Emilys-MacBook-Pro-2.local";
$username = "root";
$password = "Bl4ckb3rry!";
$dbname = "HotelTallafornia"; // will use later
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);