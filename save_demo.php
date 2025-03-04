<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "navigation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$organization = $_POST['organization'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO demo_requests (name, email, organization, message) VALUES ('$name', '$email', '$organization', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Request submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
