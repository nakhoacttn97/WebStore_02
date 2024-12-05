<?php
#namespace
#namespace controllers;
//require_once('BaseController.php');
namespace controllers;
class HomeController extends BaseController{
	//naive
	// protected function view(array $data, string $name){
	// 	extract($data);
	// 	require_once("views/$name.php");
	// }
	function index(){
		//Naive
		$data = [
			['id'=>1, 'name' => 'Laptop'],
			['id' => 2, 'name' => 'Mouse']
		];
		//Naive
		$this->view(['categories' => $data] , 'home/index');
	}
	function category(int $id, int $p = 1){
		$row = ['id'=>$id, 'name'=> 'Laptop'];
		return $this->view(['row' => $row], 'home/category');
	}
	function details(int $id){
		echo "Home detail {$id}";
	}
}