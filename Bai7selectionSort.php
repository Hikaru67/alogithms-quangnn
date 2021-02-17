<?php
/*Bước 1: Thiết lập MIN về vị trí 0
Bước 2: Tìm kiếm phần tử nhỏ nhất trong danh sách
Bước 3: Tráo đổi với giá trị tại vị trí MIN
Bước 4: Tăng MIN để trỏ tới phần tử tiếp theo
Bước 5: Lặp lại cho tới khi toàn bộ danh sách đã được sắp xếp*/

$array= [3,7,8,2,1,6];
$n = count($array);

printf("Danh sach phan tu trong mang ban dau:\n");

foreach ($array as $val){
    echo "$val ";
}

echo "\n";

for($i=0; $i<$n; $i++){
    $min = $i;

    for($j=$i+1; $j<$n; $j++ ){
        if($array[$min] > $array[$j]){
            $min = $j;
        }
    }

    if ($min != $i){
        $array[$i] += $array[$min];
        $array[$min] = $array[$i] - $array[$min];
        $array[$i] -= $array[$min];
    }

}

printf("Danh sach phan tu trong mang sau khi sap xep:\n");

foreach ($array as $val){
    echo "$val ";
}

echo "\n";