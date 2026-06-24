<?php
$yearOfBirth = readline("Enter your Year Of Birth ");

$currentYear = date("Y");
$age = $currentYear - $yearOfBirth;

echo "Hello, you are " . $age . " years old!\n";
