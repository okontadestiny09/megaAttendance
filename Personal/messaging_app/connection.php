<?php
$host = "localhost";
$username = "root";
$password = "07088521";
$db_name = "message_db";

$con = mysqli_connect($host, $username, $password, $db_name);

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
