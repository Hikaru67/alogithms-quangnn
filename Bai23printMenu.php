<?php

/*"Hãy viết function printMenu(menus), đầu vào là mảng menu, in ra menu phân cấp cha con, mỗi menu con thụt vào hai '--' so với menu cha của nó."*/

include 'common/autoload.php';

function printMenu(&$menus, $parentId, $stack) {
    foreach ($menus as $key => $menu) {
        if($menu['parent_id'] === $parentId){
            unset($menus[$key]);
            echo str_repeat('--', $stack).$menu['title']."\n";
            printMenu($menus, $menu['id'], $stack+1);
        }
    }
}

$menus = MENU;
$actMenus = $menus;
printMenu($menus, 0,0);