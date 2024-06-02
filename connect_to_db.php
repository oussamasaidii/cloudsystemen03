<?php

$servername = "mariadb";
$username = "root";
$password = "root";
$database = "azureuserdatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
