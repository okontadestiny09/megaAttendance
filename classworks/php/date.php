<?php

// $user_year = readline("Whats your year of birth:");


// $current_year = date('Y');

// $result = $current_year - $user_year;

// echo "You are $result years old";

// echo time();
// echo date('jS, M, Y, h:i:s', 1782129075);

$user = "May 23rd";
echo date("M", strtotime($user));
