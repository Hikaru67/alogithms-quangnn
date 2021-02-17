<?php

$array= [3,7,8,2,1,6];
$n = count($array);

printf("Danh sach phan tu trong mang ban dau:\n");

foreach ($array as $val){
    echo "$val ";
}
echo "\n";

for($i=0; $i<$n; $n--){
    $swapped = false;

    echo "*$n*\n";

    for ($j=0; $j<$n-1; $j++){
        if($array[$j] > $array[$j+1]){
            $array[$j] += $array[$j+1];
            $array[$j+1] = $array[$j] - $array[$j+1];
            $array[$j] -= $array[$j+1];
            $swapped = true;
        }
    }
    if(!$swapped){
        break;
    }
    foreach ($array as $val){
        echo "$val ";
    }
    echo "\n";

}

printf("Danh sach phan tu trong mang sau khi sap xep:\n");

foreach ($array as $val){
    echo "$val ";
}
echo "\n";