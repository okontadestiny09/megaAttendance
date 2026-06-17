<?php
require_once 'db.php';

$sql = "SELECT name, population FROM Country ORDER BY population DESC LIMIT 10";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_execute($stmt); $result = mysqli_stmt_get_result($stmt); 
    while ($country = mysqli_fetch_assoc($result)) {
        echo "Name: " . $country['name'] . " - Population: " . $country['population'];
        echo "\n";
        echo "..........................\n";
    }
    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
