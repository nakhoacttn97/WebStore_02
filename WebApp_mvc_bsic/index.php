<?php
spl_autoload_register(function($class){
	//var_dump($class);
	require_once("$class.php");
});
$controller = 'home';
$action = 'index';
$params = NULL;
if(isset($_SERVER['PATH_INFO'])){
	$arr = explode('/', trim($_SERVER['PATH_INFO'], '/'));
	if(isset($arr[0])){
		$controller = $arr[0];
		if(isset($arr[1])){
			$action = $arr[1];
			if(count($arr) > 2){
				$params = array_splice($arr, 2);
			}
		}
	}
}
$class = "controllers\\".ucfirst($controller)."Controller";
$file = "$class.php";
if(file_exists($file)){
	//require_once($file);
	$obj = new $class();
	$obj->viewName = $controller ."/". $action;
	//Miss
	if($params != NULL){
		$obj->$action(...$params);
	}else{
		$obj->$action();
	}	
}else{
	header('location:/');
}