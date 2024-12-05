<?php 
namespace controllers;
//require_once('BaseController.php');
class AuthController extends BaseController{
	function __construct(){
		$this->layout = 'authLayout';
	}
	function login(){
		$this->title = 'Login Store';
		//return $this->view([], 'auth/login');
		//Ky vong
		return $this->view();
	}
	function register(){
		$this->title = 'Register Store';
		//return $this->view([], 'auth/register');
		//Ky vong
		return $this->view();
	}
}
//magic => __get, __set
?>