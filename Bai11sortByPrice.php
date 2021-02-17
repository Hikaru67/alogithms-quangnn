<?php
//"Hãy viết function sortByPrice(listProduct)
//trả về danh sách product sắp xếp theo giá từ thấp đến cao. Làm theo thuật toán bubble."
include 'common/autoload.php';
$listProduct = PRODUCTS;

function sortByPrice(&$listProduct){
    $amountProducts = count($listProduct);

    for($i=0; $i<$amountProducts; $amountProducts--){
        $swapped = false;

        for ($j=0; $j<$amountProducts-1; $j++){
            if($listProduct[$j]['price'] > $listProduct[$j+1]['price']){
                swap($listProduct[$j], $listProduct[$j+1]);
                $swapped = true;
            }
        }

        if(!$swapped){
            return $listProduct;
        }

    }

}

print_r(sortByPrice($listProduct));
