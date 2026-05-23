<?php

// Student records system

$students = [];

// Add Iyedoh Unity details
$students[] = [
    "matric_no" => "CMP2307600",
    "name" => "Iyedoh Unity",
    "department" => "Software Engineering"
];

// DISPLAY THE DATA
foreach ($students as $student) {
    echo "Matric No: " . $student["matric_no"] . "<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Department: " . $student["department"] . "<br><br>";
}

?>S