<?php
namespace models;
class Category extends Db{
	function add($arr){
		$sql = 'INSERT INTO Category (CategoryName, ImageUrl, ParentId) VALUES (:name, :imageUrl, :parent)';
		return $this->save($sql, $arr);
	}
	function searchCategories(string $term){
		$sql = "SELECT CategoryId AS id, CategoryName AS value, CategoryName AS label FROM Category WHERE CategoryName LIKE :term";
		return $this->getAll($sql, ['term' => '%' . $term . '%']);
	}
	
	function getCategoriesObject(){
		$sql = "SELECT * FROM Category";
		$stmt = $this->pdo->query($sql);
		$arr = NULL;
		if($stmt){
			if($stmt->rowCount() > 0){
				$arr = $stmt->fetchAll(\PDO::FETCH_OBJ);
			}
			$stmt->closeCursor();
		}
		return $arr;
	}
	function treeCategoriesObject(){
		$arr = $this->getCategoriesObject();
		$parents = [];
		$children = [];
		foreach ($arr as $o) {
			$children[$o->CategoryId] = $o;
			if($o->ParentId == NULL){
				$parents[] = $o;
			}else{
				$k = $o->ParentId;
				if(! isset($children[$k]->children)){
					$children[$k]->children = [];
				}
				$children[$k]->children[] = $o;
			}
		}
		return $parents;
	}


    function getCategories(){
        $sql = "SELECT * FROM Category";
        return $this->getAll($sql);
    }
    function treeCategories(){
    	$arr = $this->getCategories();
    	$parents = [];
		$children = [];
		foreach ($arr as $v) {
		    $cat = new Item($v['CategoryId'], $v['CategoryName']);
		    $children[$v['CategoryId']] = $cat;
		    if($v['ParentId'] == NULL){
		        $parents[$v['CategoryId']] = $cat;
		    }else{
		        $k = $v['ParentId'];
		        if(!isset($children[$k]->children)){
		            $children[$k]->children = [];
		        }
		        $children[$k]->children[] = $cat;
		    }
		}
		return $parents;
    }
}