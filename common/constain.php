<?php
define('PRODUCTS', [
    [ 'name'  => 'CPU', 'price'  => 750, 'quality'  => 10, 'categoryId'  => 1],
    [ 'name'  => 'RAM', 'price'  => 50, 'quality'  => 2, 'categoryId'  => 2],
    [ 'name'  => 'HDD', 'price'  => 70, 'quality'  => 1, 'categoryId'  => 2],
    [ 'name'  => 'Main', 'price'  => 400, 'quality'  => 3, 'categoryId'  => 1],
    [ 'name'  => 'Keyboard', 'price'  => 30, 'quality'  => 8, 'categoryId'  => 4],
    [ 'name'  => 'Mouse', 'price'  => 25, 'quality'  => 50, 'categoryId'  => 4],
    [ 'name'  => 'VGA', 'price'  => 60, 'quality'  => 35, 'categoryId'  => 3],
    [ 'name'  => 'Monitor', 'price'  => 120, 'quality'  => 28, 'categoryId'  => 2],
    [ 'name'  => 'Case', 'price'  => 120, 'quality'  => 28, 'categoryId'  => 4]
]);

define('CATEGORYS', [	['id'=> 1, 'name' => 'Comuter'],
	['id'=> 2, 'name' => 'Memory'],
	['id'=> 3, 'name' => 'Card'],
	['id'=> 4, 'name' => 'Accessory'],
]);
			
define('MENU', [
    [
        'id' => 1,
        'title'=> "Thể thao",
        'parent_id'=> 0
    ],
    [
        'id'=> 2,
        'title'=> "Xã hội",
        'parent_id'=> 0
    ],
    [
        'id'=> 3,
        'title'=> "Thể thao trong nước",
        'parent_id'=> 1
    ],
    [
        'id'=> 4,
        'title'=> "Giao thông",
        'parent_id'=> 2
    ],
    [
        'id'=> 5,
        'title'=> "Môi trường",
        'parent_id'=> 2
    ],
    [
        'id'=> 6,
        'title'=> "Thể thao quốc tế",
        'parent_id'=> 1
    ],
    [
        'id'=> 7,
        'title'=> "Môi trường đô thị",
        'parent_id'=> 5
    ],
    [
        'id'=> 8,
        'title'=> "Giao thông ùn tắc",
        'parent_id'=> 4
    ],
    [
        'id'=> 9,
        'title'=> "Môi trường đô thị",
        'parent_id'=> 5
    ],
    [
        'id'=> 10,
        'title'=> "Giao thông ùn tắc",
        'parent_id'=> 4
    ],
    [
        'id'=> 11,
        'title'=> "Môi trường đôdas thị",
        'parent_id'=> 5
    ],
]);


			