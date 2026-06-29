<?php
include "connection.php";

if (isset($_GET['query'])) {
    sleep(3);
    $query = strtolower($_GET['query']);
    $statement = "SELECT * FROM country WHERE Name LIKE ? OR Region LIKE ?";
    $params = ["%$query%", "%$query%"];
    $query = $connection->execute_query($statement, $params);
    if ($query->num_rows > 0) {
       echo json_encode($query->fetch_all(MYSQLI_ASSOC));
    } else {
        echo json_encode([]);
    }
}