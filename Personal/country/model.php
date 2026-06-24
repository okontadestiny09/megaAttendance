<?php

function fetchAllCountries($con) {
    $result = mysqli_query($con, "SELECT Name FROM country");
    return $result;
}

function updateCountry($con, $oldName, $newName) {
    $newName = mysqli_real_escape_string($con, $newName);
    $oldName = mysqli_real_escape_string($con, $oldName);
    return mysqli_query($con, "UPDATE country SET Name = '$newName' WHERE Name = '$oldName'");
}

?>