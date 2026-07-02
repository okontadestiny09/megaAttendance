<?php

class Animal{
    public string $chain;

    function __construct(string $passed)
    {
        $this->chain = $passed;
    }

    public function mate(){
        echo "Mating without chains";
    }

    public function run(){
        echo "Running without chains";
    }

    public function eat(){
        echo "Eating without chains";
    }
}

$goat = new Animal("Jack Bauer"); // Instantiate
echo $goat->chain; // trigger a class member

// actions are methods, properties are attributes/variables