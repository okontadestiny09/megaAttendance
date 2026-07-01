<?php


class Connection
{

    public mysqli $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'megaAttendance');

        if ($this->con->connect_error) {
            die("Connection failed " . $this->con->connect_error);
        }
    }
}
