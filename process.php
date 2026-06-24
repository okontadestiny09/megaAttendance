<?php
session_start();
include ("classworks\dbclass\connection.php");

if (isset($_SESSION ['authenticated']) && $_SESSION['authenticated'] == true) {
    header("location:profile.php");
    return;
} 


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
                    // name,email,password
                    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
                    $prepared = mysqli_prepare($con, $query);
                    if ($prepared) {
                        mysqli_stmt_bind_param($prepared, "sss", $name, $email, $hash_password);
                        if (mysqli_stmt_execute($prepared)) {
                           $_SESSION['name'] = $name;
                           $_SESSION['email'] = $email;
                           $_SESSION['authenticated'] = true;
                           header("location:profile.php");
                           } else {
                            echo "Unable to register user";
                        }
                        
                    } else {
                        # code...
                    }
                    
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