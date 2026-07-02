<?php

class Hp extends Computer implements Keyboard
{
    public function model(): string
    {
        return false;
    }

    public function os(): string
    {
        return "Windows 10<br>";
    }

    public function screen(): string
    {
        return "15.6 inch Full HD<br>";
    }

    public function rgb():string
    {
        return "RGB backlit keyboard<br>";
    }
    public function type():string
    {
        return "Small keys<br>";
    }
    public function layout():string
    {
        return "qwerty<br>";
    }
}