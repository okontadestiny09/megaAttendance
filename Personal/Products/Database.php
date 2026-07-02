<?php

include "traits/Connection.php";

class Database {
    use Connection;

    public $users = [];
    public $products = [];

    public function create($item) {
        echo "Adding $item to the database";
    }

    public function read($item) {
        echo "Reading $item from the database";
    }

    public function update($item) {
        echo "Updating $item in the database";
    }

    public function delete($item) {
        echo "Deleting $item from the database";
    }

    public function connectDatabase() {
        $this->connect();
    }
}
