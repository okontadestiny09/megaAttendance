<?php

abstract class Computer
{
    abstract public function model(): string;
    abstract public function os(): string;
    abstract public function screen(): string;
}