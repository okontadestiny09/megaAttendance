<?php

include("../database/Connection.php");
include("../traits/AssignmentOperations.php");

class Assignment extends connection
{
    use AssignmentOperations;

    public function create($title, $description, $dueDate)
    {
        return $this->createAssignment($title, $description, $dueDate);
    }

    public function edit($id)
    {
        return $this->updateAssignment($id);
    }

    public function remove($id)
    {
        return $this->deleteAssignment($id);
    }
}