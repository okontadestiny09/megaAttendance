<?php
include "connection.php";
include "model.php";
global $con;

if ($_POST) {
    updateCountry($con, $_GET['country'], $_POST['newName']);
    header("Location: index.php");
}
?>

<form method="POST">
    <input type="text" name="newName" placeholder="Enter new country name" required>
    <button type="submit">Update</button>
</form>