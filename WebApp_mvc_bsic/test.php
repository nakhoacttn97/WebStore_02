<?php

spl_autoload_register(function($class){
    //var_dump($class);
    require_once("$class.php");
});


$cat = new models\Category();
$arr = $cat->getCategoriesObject();
var_dump($arr);
/*$arr = $cat->getCategories();
//var_dump($arr);

$parents = [];
$children = [];
foreach ($arr as $v) {
    $cat = new models\Category($v['CategoryId'], $v['CategoryName']);
    $children[$v['CategoryId']] = $cat;
    if($v['ParentId'] == NULL){
        $parents[$v['CategoryId']] = $cat;
    }else{
        $k = $v['ParentId'];
        if(!isset($children[$k]->children)){
            $children[$k]->children = [];
        }
        $children[$k]->children[] = $v;
    }
}
var_dump($parents);
//var_dump($children);*/



?>