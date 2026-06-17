<?php
require_once 'db.php';

$sql = "SELECT Language, COUNT(*) AS country_count FROM countryLanguage WHERE (CountryCode, Percentage) IN (SELECT CountryCode, MAX(Percentage) FROM countryLanguage GROUP BY CountryCode) GROUP BY Language ORDER BY country_count DESC LIMIT 10";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_execute($stmt); $result = mysqli_stmt_get_result($stmt); 
    while ($language = mysqli_fetch_assoc($result)) {
        echo "Language: " . $language['Language'] . " - Country Count: " . $language['country_count'];
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
