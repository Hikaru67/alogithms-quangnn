<?php
/*"Hãy viết function minByPrice(listProduct)
trả về  product có giá nhỏ nhất"*/

include 'common/autoload.php';
$listProduct = PRODUCTS;
$listCategory = CATEGORYS;

function minByPrice($listProduct){
    $amountProduct = count($listProduct);
    $minPriceProduct = $listProduct[0]['price'];
    $indexMinPriceProduct = 0;
    for($i=0; $i<$amountProduct; $i++){
        if($listProduct[$i]['price']<$minPriceProduct){
            $minPriceProduct = $listProduct[$i]['price'];
            $indexMinPriceProduct = $i;
        }
    }
    return $listProduct[$indexMinPriceProduct];
}

print_r(minByPrice($listProduct));