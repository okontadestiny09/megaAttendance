<?php

class Calculator{
    protected string $name;
    function __construct(){
        $name = readline("What is your name:");
        $this->name = $name;
    }
}