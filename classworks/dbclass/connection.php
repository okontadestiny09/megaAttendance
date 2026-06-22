<?php

$con = mysqli_connect('localhost', 'root', 'protected', 'megaAttendance');

if (!$con) {
    die("Unable to connect to the database");
}
