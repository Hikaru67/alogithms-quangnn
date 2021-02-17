<?php
/*"Hãy viết function sortByName(listProduct)
trả về danh sách product sắp xếp độ dài của tên từ cao đến thấp.
Làm theo thuật toán insertion."*/

include 'common/autoload.php';
$listProduct = PRODUCTS;

function sortByName(&$listProduct){
    $amountProducts = count($listProduct);

    for($i=0; $i<$amountProducts; $i++){
        $valueToInsert = $listProduct[$i];
        $holePosition = $i;
        while($holePosition > 0 && strcmp($listProduct[$holePosition-1]['name'], $valueToInsert['name'])>0){
            $listProduct[$holePosition] = $listProduct[$holePosition-1];
            $holePosition--;
        }

        $listProduct[$holePosition] = $valueToInsert;

    }

    return $listProduct;
}

print_r(sortByName($listProduct));
