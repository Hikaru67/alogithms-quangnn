<?php
/*"Hãy viết function mapProductByCategory(listProduct, listCategory)
trả về danh sách product có chứa tên category tương ứng theo categoryId"*/

include 'common/autoload.php';
$listProduct = PRODUCTS;
$listCategory = CATEGORYS;

function mapProductByCategory(&$listProduct, $listCategory){
    foreach ($listProduct as &$product){
        $product['categoryName'] = getCategoryNameById($listCategory, $product['categoryId']);
    }
    return $listProduct;
}

var_dump(mapProductByCategory($listProduct, $listCategory));