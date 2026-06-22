<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-red{
            color: red;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Fill in the form</legend>
        <form action="process.php" method="post">
        <label for="">Name</label>
        <input name="name" value="<?= $_SESSION['user_name'] ?? null; ?>" type="text" placeholder="Enter name">
        <p class="text-red"><?=  $_SESSION['name_error'] ?? null ?></p>
        <br>
        <label for="">Email</label>
        <input name="email" value="<?= $_SESSION['user_email'] ?? null; ?>" type="text" placeholder="Enter email">
        <p class="text-red"><?=  $_SESSION['email_error'] ?? null ?></p>
        <br>
        <label for="">password</label>
        <input name="password" type="password" placeholder="Enter password">
        <p class="text-red"><?=  $_SESSION['password_error'] ?? null ?></p>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </fieldset>
</body>
</html>
<?php 
unset($_SESSION['name_error']); 
unset($_SESSION['email_error']); 
?>