<?php
// echo md5('justice');

$password = "tested";

// $encrypted = password_hash($password, PASSWORD_DEFAULT);

$encrypted = '$2y$12$z2fbXUufWYSTh4d/RD5oRuvjQtW8Id3Db9u70ez8kOoVJkc3aLw2i';
// echo $encrypted;
// return;


if (password_verify($password, $encrypted)) {
    echo "Logged in";
} else {
       echo "Incorrect password";
}