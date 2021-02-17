<?php
//Giả sử LA là một mảng tuyến tính không có thứ tự có N phần tử và K là một số nguyên dương thỏa mãn K <= N. Dưới đây là giải thuật chèn phần tử A vào vị trí thứ K của mảng LA.

$LA= [1,3,5,7,8];
printf("Danh sach phan tu trong mang ban dau:\n");

foreach ($LA as $val){
    echo "$val ";
}

echo "\n";

function insertIntoArray(&$LA){
    $item = 10; $k = 3; $n = count($LA);
    $j = $n-1;

    while( $j >= $k){
        $LA[$j+1] = $LA[$j];
        $j--;
    }

    $LA[$k] = $item;

    printf("Danh sach phan tu cua mang sau hoat dong chen:\n");

    foreach ($LA as $val){
        echo "$val ";
    }

    echo "\n";
}


//Giả sử LA là một mảng tuyến tính có N phần tử và K là số nguyên dương thỏa mãn K <= N. Dưới đây là thuật toán để xóa một phần tử có trong mảng LA tại vị trí K.

function deleteOneInArray(&$LA){
    $k = 3; $n = count($LA);

    $j = $k;

    while( $j < $n){
       $LA[$j-1] = $LA[$j];
       $j++;
    }

    $n--;

    printf("Danh sach phan tu trong mang sau hoat dong xoa:\n");

    for ($i = 0; $i<$n; $i++){
        echo "$LA[$i] ";
    }

    echo "\n";
}

//Giả sử LA là một mảng tuyến tính có N phần tử và K là số nguyên dương thỏa mãn K <= N. Dưới đây là giải thuật để tìm một phần tử ITEM bởi sử dụng phương pháp tìm kiếm tuần tự (hay tìm kiếm tuyến tính).
function searchInArray(&$LA, $k){
    for($i=0; $i<count($LA); $i++){
        if($LA[$i] == $k) {
            $i++;
            echo "Tim thay phan tu $k tai vi tri $i \n";
            return 0;
        }
    }
    echo "Khong tim thay";
    return 0;
}

//Giả sử LA là một mảng tuyến tính có N phần tử và K là số nguyên dương thỏa mãn K <= N. Dưới đây là giải thuật để update giá trị phần tử tại vị trí K của mảng LA.

function updateOneInArray(&$LA, $k, $val){
    $LA[$k-1] = $val;

    printf("Danh sach phan tu trong mang sau khi update:\n");

    foreach ($LA as $val){
        echo "$val ";
    }

    echo "\n";
}

//    insertIntoArray($LA);
//    deleteOneInArray($LA);
//    searchInArray($LA, 5);
    updateOneInArray($LA, 3, 9);
