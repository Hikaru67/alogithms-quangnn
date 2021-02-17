<?php
function swapNumber(&$firstNumber, &$secondNumber){
    $firstNumber += $secondNumber;
    $secondNumber = $firstNumber - $secondNumber;
    $firstNumber -= $secondNumber;
}

function swap(&$firstVariable, &$secondVariable){
    $tempVariable = $firstVariable;
    $firstVariable = $secondVariable;
    $secondVariable = $tempVariable;
}