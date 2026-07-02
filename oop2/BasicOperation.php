<?php

trait BasicOperation{
    function add($val1, $val2, $val3){

        $columns = implode(",", $this->fillable);
        $statement = "INSERT INTO $this->table($columns) VALUES(?, ?, ?)";
        $params = [$val1, $val2, $val3];
        $query = $this->connection->execute_query($statement, $params);
        if ($query) {
            return true;
        }
        else {
            return false;
        }
    }

    function delete(){
        echo "Deleting data...<br>";
    }
}