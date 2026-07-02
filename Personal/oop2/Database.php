<?php

class Database{
    private $conn;

    public function __construct() {
        $this->connectDatabase();
    }

}