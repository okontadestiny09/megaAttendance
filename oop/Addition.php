<?php
include "Calculator.php";
class Addition extends Calculator{

    public function evaluate($a, $b){
        $answer = $a + $b;
        echo $this->name. ", $a + $b is  $answer";
    }
}

$add = new Addition();
$add->evaluate(5,3);