<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $data = Category::all();
        return  view('category.index', ['arr' => $data]);
    }

    function add(Request $req){
        if($req->isMethod('post'){
            $data = $req->validate(['category_name' => 'required']);
            if(Category::create($data)){
                return redirect('/category');
            }
        }
        return view('category.add');
    }
}
