<?php

class Database
{
    protected mysqli $connection;

    function __construct()
    {
        $this->connect();
    }

    function connect(){
        $connection = new mysqli('localhost', 'root', '', 'july-1');

        if ($connection->connect_error) {
            die("Connection failed ". $connection->connect_error);
        }else{
            echo "connected";
        }
        return $this->connection = $connection;
    }
}


?>
