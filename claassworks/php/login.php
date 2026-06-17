<?php
include 'students_data.php';

// Check if the form was actually submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    foreach ($datas as $student) {
        // Ensure the student record actually contains login credentials before checking them
        if (isset($student['username'], $student['password'])) {
            if ($student['username'] === $user && $student['password'] === $pass) {
              echo "Login successful! Welcome, " . htmlspecialchars($student['name']);
                            exit;
            }
        }
    }

    echo "Invalid username or password. <a href='../login.html'>Try again</a>";
} else {
    header("Location: ../login.html");
    exit;
}
?>