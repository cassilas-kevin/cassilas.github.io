<?php
require_once 'connect.php';
echo "Applying migration\n";

$stmt =$db->prepare("CREATE TABLE IF NOT EXISTS Admin(id SERIAL,username VARCHAR(255) NOT NULL UNIQUE, password TINYTEXT NOT NULL , is_staff BOOLEAN DEFAULT 0 , last_updated TIMESTAMP)");
$stmt ->execute();
echo "Applied migration";


?>