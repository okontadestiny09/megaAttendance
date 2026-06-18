<?php
function select(string $table, int $limit, string $condition = ""){
   if ($condition) {
     $statement = "SELECT * FROM $table $condition LIMIT $limit";
   } else {
     $statement = "SELECT * FROM $table LIMIT $limit";
   }
//    exit($statement);
    return $statement;
}
function executeQuery($con, $statement){
    $prepare = mysqli_prepare($con, $statement);
    $execute = mysqli_stmt_execute($prepare);
    $results = mysqli_stmt_get_result($prepare);
    return $results;
}
function fetchAllCountries($con){
    $statement = select('country',1000);
   $results = executeQuery($con, $statement);
    return $results;
}
function fetchAllLanguages($con){
    $statement = select('countrylanguage',5);
    $results = executeQuery($con, $statement);
    return $results;
}
function findCountryByCode($con, $code){
    $statement = select('country', 1, "WHERE Code = '$code'");
    $results = executeQuery($con, $statement);
    return $results;
}