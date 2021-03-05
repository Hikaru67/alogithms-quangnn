<?php

/*"Hãy viết function calSalary(salary, n) , trả về lương của năm thứ n.
Biết rằng cứ mỗi năm lương sẽ tăng bằng 10% năm liền trước.
Viết bằng 2 cách, đệ qui và không dùng đệ qui"*/


function calSalary($salary, $n) {
    for($i=0; $i<$n; $i++){
        $salary *= 1.1;
    }
    return $salary;
}

function calSalaryRecursion($salary, $n) {
    if($n===0)
        return $salary;
    return calSalaryRecursion($salary*1.1, $n-1);
}

$salary = 1000;
$n = 10;
echo "Lương năm 1: $salary$ \n";
echo "Lương năm $n: ".calSalary($salary, $n)."\n";
echo "Lương năm $n đệ quy: ".calSalaryRecursion($salary, $n)."\n";