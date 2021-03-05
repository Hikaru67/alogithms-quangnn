<?php

/* "Hãy viết function calMonth(money, rate) , trả về số tháng tiền cần gửi tiết kệm để tiền gốc +
 lãi tăng gấp đôi so với tiền gốc. Money là số tiền gốc, rate là % lãi suất mỗi tháng. ví dụ calMount(1000, 5). 
Viết bằng 2 cách, đệ qui và không dùng đệ qui" */

function calMonth($money, $rate) {
    $month = 0;
    while($money*pow(1+$rate/100, $month)/ $money < 2){
        $month++;
    }
    return $month;
}

function calMonthRecursion($money, $rate, $month) {
    if($money*pow(1+$rate/100, $month)/ $money >= 2)
        return $month;
    return calMonthRecursion($money, $rate, ++$month);
}

$money = 1000;
$rate = 10;
echo "Số tiền ban đầu: $money\n";
echo "Lãi suất: $rate%\n";
echo "Số tháng cần gửi tiết kiệm: ".calMonth($money, $rate)."\n";
echo "Số tháng cần gửi tiết kiệm đệ quy: ".calMonthRecursion($money, $rate, 0)."\n";