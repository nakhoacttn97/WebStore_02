<?php
namespace controllers;
class CategoryController extends BaseController{
	private $cat;
	function __construct(){
		$this->cat = new \models\Category();	
	}
	function search(){
		//var_dump($_GET);
		echo $this->json($this->cat->searchCategories($_GET['term']));
	}

	function add(){
		if(isset($_POST['name'])){
			$_POST['imageUrl'] = upload('f', 'img');
			$data = $this->validate(['name'=>'required']);
			if($data != NULL){
				$ret = $this->cat->add($_POST);
				if($ret > 0){
					//return header('location:/category');
					return redirect('/category');
				}
			}else{
				//return $this->view([], 'category/add');
				return $this->view();
			}
		}
		//return $this->view(['arr' => $this->cat->getCategories()],'category/add');
		return $this->view(['arr' => $this->cat->getCategories()]);
	}

	function index(){
		$arr = $this->cat->treeCategories();
		//return $this->view(['arr' => $arr], 'category/index');
		return $this->view(['arr' => $arr]);
	}
	function tree(){
		//return $this->view(['arr' => $this->cat->treeCategoriesObject()], 'category/tree');
		return $this->view(['arr' => $this->cat->treeCategoriesObject()]);
	}
}
?>