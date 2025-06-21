<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select student database
$conn->select_db("student");

echo "Connected to database successfully!";
?>
