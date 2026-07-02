<?php

class Database {
    public $users = [];

    public function create($user) {
        echo "Adding $user to the database";
    }

    public function read($user) {
        echo "Reading $user from the database";
    }

    public function update($user) {
        echo "Updating $user in the database";
    }

    public function delete($email) {
        echo "Deleting user with email $email";
    }
}
