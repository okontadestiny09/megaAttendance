<?php

$departments = [
    ["id" => 1, "name" => "Software Engineering"],
    ["id" => 2, "name" => "Computer Science"],
    ["id" => 3, "name" => "ICT"],
    ["id" => 4, "name" => "Cyber Security"]
];

header("Content-Type: application/json");
echo json_encode($departments);