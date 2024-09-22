<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    function index(){
        return view('brand.index', ['arr' => Brand::all()]);
    }

    function add(Request $req){
        $msg = NULL;
        if($req->isMethod('post')){
            $data = $req->validate(['name' => 'required']);
            //var_dump($data);
            $ret = Brand::create($data);
            //var_dump($ret);
            if($ret){
                return redirect('/brand');
            }
            $msg = 'Insert Failed';
        }
        return view('brand.add', ['msg' => $msg]);
    }

    function details(int $id){
        return view('brand.details', ['v' => Brand::findOrFail($id)]);
    }

    function delete(int $id){
        $ret = Brand::remove($id);
        //var_dump($ret);
        if($ret){
            return redirect('/brand');
        }
        return redirect('/brand/error');
    }
}
