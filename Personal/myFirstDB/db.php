<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "world";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected!";
}

//Set charset to avoid encoding issues
mysqli_set_charset($conn, "utf8mb4");