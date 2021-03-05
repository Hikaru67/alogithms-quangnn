<?php

//Hãy viết class Stack, có 2 phương thức get và push. Đàm bảo vào sau ra trước

class Stack
{
    function get(&$array) {
        $length = count($array);
        if ($length) {
            $item = $array[$length-1];
            unset($array[$length-1]);
            return $item;
        }

        return "Data is empty";
    }

    function push(&$array, $item) {
        return $array[] = $item;
    }
}

$stack = new Stack();
$array = [1,2,3];
var_dump($stack->push($array, 6));
var_dump($stack->push($array, 8));

var_dump($stack->get($array));
var_dump($stack->get($array));
var_dump($stack->get($array));
var_dump($stack->get($array));
var_dump($stack->get($array));
var_dump($stack->get($array));