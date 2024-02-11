<?php

$SERVER = '127.0.0.1';
$user = 'root';
$password = ''; // Replace with the actual password you set for the root user
$DB = "shellby_db";

// Establish a connection to the database
$conn = new mysqli($SERVER, $user, $password, $DB);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
?>
