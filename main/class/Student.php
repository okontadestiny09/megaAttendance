<?php

include("../database/Connection.php");

class Student extends connection
{
    use StudentTrait;

    public function register($name, $department, $email)
    {
        if (!$this->isValidEmail($email)) {
            return "Invalid Email";
        }

        $studentCode = $this->generateStudentCode();

        $name = $this->formatStudentName($name);

        $sql = "INSERT INTO students(student_id,name,department,email)
                VALUES(?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "ssss",
            $studentCode,
            $name,
            $department,
            $email
        );

        return $stmt->execute();
    }
}
