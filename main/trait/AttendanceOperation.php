<?php

trait AttendanceOperation
{
    public function markPresent(int $studentId)
    {
        return "Student $studentId marked present.";
    }

    public function markAbsent(int $studentId)
    {
        return "Student $studentId marked absent.";
    }
}