<?php

trait AssignmentOperations
{

    public function createAssignment(string $title, string $description, string $dueDate)
    {
        if ($this->isExpired($dueDate)) {
            return "Cannot create assignment. The due date has expired.";
        }

        return "Assignment '$title' created successfully. Due Date: " .
            $this->formatDueDate($dueDate);
    }

    public function updateAssignment(int $id)
    {
        return "Assignment $id updated successfully.";
    }

    public function deleteAssignment(int $id)
    {
        return "Assignment $id deleted successfully.";
    }

    protected function isExpired(string $dueDate)
    {
        return strtotime($dueDate) < time();
    }

    protected function formatDueDate(string $dueDate)
    {
        return date("d M Y", strtotime($dueDate));
    }
}
