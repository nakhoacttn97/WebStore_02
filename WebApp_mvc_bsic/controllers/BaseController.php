<?php
namespace controllers;
function randomString(int $len){
	$pattern = '234567890wertyuiopsdfghjklzxcvbnm';
	$str = '';
	$n = strlen($pattern) - 1;
	for ($i=0; $i < $len; $i++) { 
		$str .= $pattern[random_int(0, $n)];
	}
	return $str;
}
function upload(string $key, string $folder, int $len = 32){
	$fileName = NULL;
	if(isset($_FILES[$key]) && $_FILES[$key]['name'] != ''){
		$ext = pathinfo($_FILES[$key]['name'], PATHINFO_EXTENSION);
		$fileName = randomString($len - strlen($ext) - 1). ".". $ext;
		move_uploaded_file($_FILES[$key]['tmp_name'], $folder. "/" . $fileName);
	}
	return $fileName;
}
function redirect(string $url = '/'){
	return header("location:$url");
}
abstract class BaseController{
	protected $layout = 'layout';
	protected $title = 'Store';
	protected $data;
	protected $viewName;
	protected $errors;

	function __set($name, $val){
		$this->$name = $val;
	}
	protected function view(array $data = [], string $name = NULL){
		//extract($data);
		//require_once("views/$name.php");
		$this->data = $data;
		if($name != NULL){
			$this->viewName = $name;
		}
		require_once("views/shared/{$this->layout}.php");
	}

	protected function validate(array $rules){
		foreach($_POST as $k => $v){
			$_POST[$k] = trim($_POST[$k]);
			if($_POST[$k] == ''){
				$_POST[$k] = NULL;
			}
		}
		$errs = [];
		foreach($rules as $k => $v){
			if($v == 'required'){
				if($_POST[$k] == NULL){
					$errs[] = "Please input {$k}";
				}
			}
		}
		if(count($errs)){
			$this->errors = $errs;
			return NULL;
		}
		return $_POST;
	}
	protected function showErrors(){
		if($this->errors){
			echo "<ul>";
			foreach($this->errors as $err){
				echo "<li>{$err}</li>";
			}
			echo "</ul>";
		}
	}
	protected function json(array $data){
		header('Content-Type:application/json');
		return json_encode($data);
	}
	
	
	protected function render(){
		if($this->data != NULL && count($this->data) > 0){
			extract($this->data);
		}
		require_once("views/{$this->viewName}.php");
	}
}
?>