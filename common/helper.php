<?php
require_once 'common/constain.php';

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

function getCategoryNameById($listCategory, $categoryId){
    foreach ($listCategory as $category){
        if($category['id'] === $categoryId){
            return $category['name'];
        }
    }
}