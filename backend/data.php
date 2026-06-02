<?php

$teamLeaders = [
    [
        "id" => 1,
        "name" => "Otiti Chigoziem P.",
        "department" => "Software Engineering"
    ],
    [
        "id" => 2,
        "name" => "Anthony Ruth C.",
        "department" => "Software Engineering"
    ],
    [
        "id" => 3,
        "name" => "Uzoma Chimere C.",
        "department" => "Software Engineering"
    ],
    [
        "id" => 4,
        "name" => "Udhedhe Wisdom",
        "department" => "Software Engineering"
    ],
    [
        "id" => 5,
        "name" => "Okonta Miracle",
        "department" => "Software Engineering"
    ],
    [
        "id" => 6,
        "name" => "Boi Mercy",
        "department" => "Software Engineering"
    ],
    [
        "id" => 7,
        "name" => "Uwaje Onyeka",
        "department" => "Computer Science"
    ],
    [
        "id" => 8,
        "name" => "Audu Treasure",
        "department" => "Software Engineering"
    ]
];

header('Content-Type: application/json');
echo json_encode($teamLeaders);