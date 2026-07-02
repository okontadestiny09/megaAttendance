<?php

include "Database.php";
include "traits/Notification.php";

class User extends Database {
    use Notification;

    public function addUser($name, $email, $password) {
        if (empty($name)) {
            echo "Name is required";
            return;
        }

        if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Valid email is required";
            return;
        }

        if (strlen($password) <= 6) {
            echo "Password must be more than 6 characters";
            return;
        }

        if (in_array($email, array_column($this->users, 'email'))) {
            echo "Email already exists";
            return;
        }

        $this->users[] = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];

        echo "Validating user: $name";
        $this->create($email);
        $this->send();
    }

    public function editUser($name, $email) {
        echo "Editing user: $name with email $email";
        $this->update($name);
    }

    public function removeUser($email) {
        echo "Removing user with email: $email";
        $this->delete($email);
    }
}
