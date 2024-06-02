<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "azureuserdatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO birds (name, species) VALUES ('Sparrow', 'Passeridae')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
