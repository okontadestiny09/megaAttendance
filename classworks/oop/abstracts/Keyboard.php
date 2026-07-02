<?php

interface Keyboard
{
    public function type(): string;
    public function layout(): string;
}