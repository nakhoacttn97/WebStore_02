<?php 
namespace models;
class Item{
	public $id;
	public $name;
	function __construct($id, $name){
		$this->id = $id;
		$this->name = $name;
	}
}
?>