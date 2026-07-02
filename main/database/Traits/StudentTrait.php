<?php

trait StudentTrait
{

    public function formatStudentName(string $name)
    {
        return ucwords(strtolower(trim($name)));
    }

    public function isValidEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

?>