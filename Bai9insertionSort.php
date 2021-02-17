<?php
/*Bước 1: Kiểm tra nếu phần tử đầu tiên đã được sắp xếp. trả về 1
Bước 2: Lấy phần tử kế tiếp
Bước 3: So sánh với tất cả phần tử trong danh sách con đã qua sắp xếp
Bước 4: Dịch chuyển tất cả phần tử trong danh sách con mà lớn hơn giá trị để được sắp xếp
Bước 5: Chèn giá trị đó
Bước 6: Lặp lại cho tới khi danh sách được sắp xếp*/

$array= [3,7,8,2,1,6];
$n = count($array);

foreach ($array as $val){
    echo "$val ";
}
echo "\n";

for($i=0; $i<$n; $i++){

    /* chọn một giá trị để chèn */
    $valueToInsert = $array[$i];
    $holePosition = $i;

    /*xác định vị trí cho phần tử được chèn */

    while($holePosition > 0 && $array[$holePosition-1] > $valueToInsert){
        $array[$holePosition] = $array[$holePosition-1];
        foreach ($array as $val){
            echo "*$val ";
        }
        echo "\n";
        $holePosition--;
    }

    $array[$holePosition] = $valueToInsert;
    foreach ($array as $val){
        echo "$val ";
    }
    echo "\n";

}

foreach ($array as $val){
    echo "$val ";
}
echo "\n";