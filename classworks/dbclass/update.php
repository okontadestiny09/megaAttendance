<?php
include "connection.php";

$country = $_POST['country'];
$population = $_POST['population'];



$code = $_GET['code'];

$statement = "UPDATE country SET Name = ?, Population = ? WHERE Code = ?";
$prepare = mysqli_prepare($con, $statement);
mysqli_stmt_bind_param($prepare, 'sis', $country, $population,$code);
$results = mysqli_stmt_execute($prepare);
