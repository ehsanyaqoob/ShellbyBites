<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'shellby_db';

$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];

// Insert form data into the database
$sql = "INSERT INTO bookings (name, email, phone, date, time, people) VALUES ('$name', '$email', '$phone', '$date', '$time', $people)";

if (mysqli_query($conn, $sql)) {
    echo "New booking record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>