<?php
include "connection.php";
include "model.php";
global $con;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $country = $_POST['country'];
    $continent = $_POST['continent'];

    if (!empty($code) && !empty($country) && !empty($continent)) {
        $check = checkCountry($con, $code, $country);
        if ($check) {
            $error = "Country already exists.";
        } else {
            addCountry($con, $code, $country, $continent);
            echo "Data Saved Successfully <a href = 'index.php'> Go back</a>";
            // header("Location: index.php");
            exit;
        }
    } else {
        $error = "Please fill in fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Country</title>
</head>
<body>
        <h1>Add Country</h1>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="post">
            <label for="country">Name:</label>
            <input type="text" name="country" id="country" placeholder="Enter Country Name"> 
            <br><br>
            <label for="code">Code:</label>
            <input type="text" name="code" id="code" placeholder="Enter Country Code"> 
            <br><br>
            <label for="continent">Continent:</label>
            <input type="text" name="continent" id="continent" placeholder="Enter Continent Name"> 
            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>