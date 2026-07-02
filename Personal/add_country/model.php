<?php
function executeQuery($con, $statement){
    $prepare = mysqli_prepare($con, $statement);
    $execute = mysqli_stmt_execute($prepare);
    $results = mysqli_stmt_get_result($prepare);
    return $results;
}
function checkCountry($con, $code, $country){
    $statement = "SELECT * FROM country WHERE code = ? AND name = ?";
    $prep_check = mysqli_prepare($con, $statement);
    mysqli_stmt_bind_param($prep_check, 'ss', $code, $country);
    mysqli_stmt_execute($prep_check);
    $results = mysqli_stmt_get_result($prep_check);
    $assoc = mysqli_fetch_assoc($results);
    return $assoc;
}
function addCountry($con, $code, $country, $continent){
    $statement = "INSERT INTO country (Code, Name, Continent) VALUES ('$code', '$country', '$continent')";
    $results = executeQuery($con, $statement);
    return $results;
}
