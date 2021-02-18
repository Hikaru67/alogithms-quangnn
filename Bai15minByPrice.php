<?php
/*"Hãy viết function minByPrice(listProduct)
trả về  product có giá nhỏ nhất"*/

include 'common/autoload.php';
$listProduct = PRODUCTS;
$listCategory = CATEGORYS;

function minByPrice($listProduct){
    $amountProduct = count($listProduct);
    $indexMinPrice = 0;
    for($i=0; $i<$amountProduct; $i++){
        if($listProduct[$i]['price']<$listProduct[$indexMinPrice]['price']){
            $indexMinPrice = $i;
        }
    }
    return $listProduct[$indexMinPrice];
}

print_r(minByPrice($listProduct));