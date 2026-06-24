<?php
$servername = "localhost";
$username = "root"; // Default XAMPP/MySQL username
$password = "";     // Usually empty if not set
$dbname = "your_database_name"; // Change this to your actual DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
?>