<?php

$fullname = trim($_POST["fullname"] ?? "");
$matric = trim($_POST["matric"] ?? "");
$dept = trim($_POST["dept"] ?? "");
$faculty = trim($_POST["faculty"] ?? "");
$place = trim($_POST["place-of-it"] ?? "");
$date = trim($_POST["registration-date"] ?? "");
$password = trim($_POST["password"] ?? "");

if (
    $fullname === "" ||
    $matric === "" ||
    $dept === "" ||
    $faculty === "" ||
    $place === "" ||
    $date === "" ||
    $password === ""
) {
    echo "<script>
        alert('Please fill all fields before submitting');
        window.history.back();
    </script>";
    exit();
}

echo "<script>
    alert('Registration successful');
    window.location.href = '../login.html';
</script>";

?>