<?php
$dbHost = "localhost:3307";
$dbUser = "root";
$dbPass = "Wmnkdr123";
$dbName = "etg";

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    //echo "sarah";
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}