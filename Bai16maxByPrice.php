<?php
/*"Hãy viết function maxByPrice(listProduct)
trả về  product có giá lớn nhất"*/

include 'common/autoload.php';
$listProduct = PRODUCTS;
$listCategory = CATEGORYS;

function maxByPrice($listProduct){
    $amountProduct = count($listProduct);
    $indexMaxPrice = 0;
    for($i=0; $i<$amountProduct; $i++){
        if($listProduct[$i]['price']>$listProduct[$indexMaxPrice]['price']){
            $indexMaxPrice = $i;
        }
    }
    return $listProduct[$indexMaxPrice];
}

print_r(maxByPrice($listProduct));