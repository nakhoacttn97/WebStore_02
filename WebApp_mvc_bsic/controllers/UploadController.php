<?php
namespace controllers;
class UploadController extends BaseController{
    function index(){
        return $this->view();
    }
    function doUpload(){
        echo upload('f', 'img');
    }
}