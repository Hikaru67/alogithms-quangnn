<?php
/*"Hãy viết function maxByPrice(listProduct)
trả về  product có giá lớn nhất"*/

include 'common/autoload.php';
$listProduct = PRODUCTS;
$listCategory = CATEGORYS;

function maxByPrice($listProduct){
    $amountProduct = count($listProduct);
    $maxPriceProduct = $listProduct[0]['price'];
    $indexMaxPriceProduct = 0;
    for($i=0; $i<$amountProduct; $i++){
        if($listProduct[$i]['price']>$maxPriceProduct){
            $minPriceProduct = $listProduct[$i]['price'];
            $indexMinPriceProduct = $i;
        }
    }
    return $listProduct[$indexMaxPriceProduct];
}

print_r(maxByPrice($listProduct));