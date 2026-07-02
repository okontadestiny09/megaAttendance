<?php

class Product extends Database{
    public function __construct() {
        $this->connectDatabase();
    }
}