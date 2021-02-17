<?php
$a = 5;
$b = 6;
$c = 0;
function sum($a, $b, &$c){
    $c = $a + $b;
}
sum($a, $b, $c);
echo $c;