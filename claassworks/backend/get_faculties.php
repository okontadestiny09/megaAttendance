<?php

$faculties = [
    ["id" => 1, "name" => "Faculty of Computing"],
    ["id" => 2, "name" => "Faculty of Engineering"]
];

header("Content-Type: application/json");
echo json_encode($faculties);