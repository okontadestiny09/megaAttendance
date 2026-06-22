<?php
session_start();

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $_SESSION['user_name'] = $name;
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['user_email'] = $email;
            if (isset($_POST['password']) && !empty($_POST['password'])) {
                $password = $_POST['password'];
                if (strlen($password) > 6) {
                    $hash_password = password_hash($password, PASSWORD_DEFAULT);
                    echo $hash_password;
                    // name,email,password
                    $query = "INSERT INTO ";
                } else {
                    $_SESSION['password_error'] = "Password must be more than 6 characters";
                    header("location:register.php");
                }
                
            } else {
                $_SESSION['password_error'] = "Password is required";
                header("location:register.php");
            }
    } else {
        $_SESSION['email_error'] = "Email is required";
        header("location:register.php");
    }
    
} else {
    $_SESSION['name_error'] = "Name is required";
    header("location:register.php");
}