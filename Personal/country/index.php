<?php
include "connection.php";
include "model.php";
global $con;

$allcountries = fetchAllCountries($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Assignments</title>
</head>
<body>

    <h2>All countries</h2>
    <table>
        <tr>
            <th>Country Names</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($allcountries)): ?>
            <tr>
                <td><?= $row['Name'] ?></td>
                <td><a href="edit.php?country=<?= urlencode($row['Name']) ?>">Edit</a></td>
            </tr>
        <?php endwhile ?>
    </table>

</body>
</html>