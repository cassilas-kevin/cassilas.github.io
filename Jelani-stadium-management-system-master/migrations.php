<?php
require_once 'connect.php';
echo "Applying migration\n";

$stmt =$db->prepare("CREATE TABLE IF NOT EXISTS user(id SERIAL,username VARCHAR(255) NOT NULL UNIQUE, email VARCHAR(255) NOT NULL UNIQUE, password TINYTEXT NOT NULL , is_staff BOOLEAN DEFAULT 0 , last_updated TIMESTAMP)");
$stmt ->execute();
echo "Applied migration";

$stmt =$db->prepare("CREATE TABLE IF NOT EXISTS ticket(id SERIAL,ticket_number VARCHAR(255) NOT NULL , class VARCHAR(255) NOT NULL,number_of_ticket int NOT NULL DEFAULT 1  , time_booked DATE , last_updated TIMESTAMP)");
$stmt ->execute();
echo "Applied migration";


?>