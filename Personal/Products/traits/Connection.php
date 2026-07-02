<?php

trait Connection {
    public function connect() {
        $connection = new mysqli('localhost', 'root', '07088521', 'products_db');
        if ($connection->connect_error) {
            die("Connection failed ". $connection->connect_error);
        }
    }
}