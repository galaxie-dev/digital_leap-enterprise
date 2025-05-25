<?php
// Database credentials
$host     = "localhost";
$username = "root";         
$password = "";             
$database = "digital_leap";  

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// OSet character set to UTF-8
$conn->set_charset("utf8mb4");
?>
