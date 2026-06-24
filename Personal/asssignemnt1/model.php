<?php

function executeQuery($con, $statement) {
    $prepare = mysqli_prepare($con, $statement);
    mysqli_stmt_execute($prepare);
    $results = mysqli_stmt_get_result($prepare);
    mysqli_stmt_close($prepare); 
    
    return $results;
}

function fetchTopLifeExpectancy($con) {
    $statement = "SELECT NAME, LIFEEXPECTANCY FROM country ORDER BY LIFEEXPECTANCY DESC LIMIT 10";
    return executeQuery($con, $statement);
}

function fetchTopPopulatedAfricanCountries($con) {
    $statement = "SELECT name, Population FROM country WHERE Continent = 'Africa' ORDER BY Population DESC LIMIT 10";
    return executeQuery($con, $statement);
}

function fetchSmallestCities($con) {
    $statement = "SELECT name, Population FROM city ORDER BY Population ASC LIMIT 10";
    return executeQuery($con, $statement);
}


function fetchAllCountries($con){
    $statement = "SELECT * FROM country LIMIT 20";
    $results = executeQuery($con, $statement);
    return $results;
}

function findCountryByCode($con, $code){
    $statement = "SELECT * FROM country WHERE Code = '$code'";
    $results = executeQuery($con, $statement);
    return $results;
}

?>