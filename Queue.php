<?php

//Hãy viết class Queu, có 2 phương thức get và push. Đàm bảo vào trước ra trước


class Queue
{
    function get(&$array) {
        if (count($array)) {
            $item = $array[0];
            $array = array_slice($array, 1);
            return $item;
        }
        return "Data is empty";
    }

    function push(&$array, $item) {
        return $array[] = $item;
    }
}

$queue = new Queue();
$array = [1,2,3];
var_dump($queue->push($array, 6));
var_dump($queue->push($array, 8));

var_dump($queue->get($array));
var_dump($queue->get($array));
var_dump($queue->get($array));
var_dump($queue->get($array));
var_dump($queue->get($array));
var_dump($queue->get($array));