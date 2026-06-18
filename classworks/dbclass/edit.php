<?php
include "connection.php";
include "model.php";
$code = $_GET['code'];
if ($code) {
    $results = findCountryByCode($con, $code);
} else {
   die("Unable to locate country");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($row = mysqli_fetch_assoc($results)):?>
        <h1>Edit <?= $row['Name']; ?></h1>
        <form action="" method="post">
            <label for="">Name:</label>
            <input type="text" value="<?= $row['Name']; ?>"> 
            <br>
            <label for="">Population:</label>
            <input type="text" value="<?= $row['Population']; ?>"> 
            <br>
            <label for="">Code:</label>
            <input type="text" value="<?= $row['Code']; ?>"> 
            <br>
        </form>
    <?php endwhile?>
</body>
</html>