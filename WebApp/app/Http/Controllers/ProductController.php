<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('product.index', ['arr' => Product::all()]);
    }
    function add(){

        return view('product.add', ['crr' => Category::all()]);
    }
}