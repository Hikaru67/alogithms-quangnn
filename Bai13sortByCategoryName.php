<?php
/*"Hãy viết function sortByCategoryName(listProduct, listCategory)
trả về danh sách product sắp xếp theo category name theo thứ tự abc. .
Làm theo thuật toán của bài 12."*/

include 'common/autoload.php';
$listProduct = PRODUCTS;

function sortByCategoryName(&$listProduct){
    $amountProducts = count($listProduct);

    for($i=0; $i<$amountProducts; $i++){
        $valueToInsert = $listProduct[$i];
        $holePosition = $i;
        while($holePosition > 0 && strcmp(getCategoryNameById($listProduct[$holePosition-1]['categoryId']), getCategoryNameById($valueToInsert['categoryId']))>0){
            $listProduct[$holePosition] = $listProduct[$holePosition-1];
            $holePosition--;
        }

        $listProduct[$holePosition] = $valueToInsert;

    }

    return $listProduct;
}

print_r(sortByCategoryName($listProduct));
