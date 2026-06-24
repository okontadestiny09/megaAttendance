<?php session_start(); ?>

<?php if (!$_SESSION['authenticated']) {
    header("location:register.php");
    return;
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
    <h1>Profile</h1>
    <p> <?php echo $_SESSION['name']; ?>, welcome to our app! </p>
    <p> Your Email is <?php echo $_SESSION['email']; ?> </p>
    <button><a href="logout.php">Logout</a></button>
</body>
</html>