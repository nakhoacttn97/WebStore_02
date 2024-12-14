<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
<<<<<<< HEAD

class BrandController extends Controller
{
    //
    function index(){
        return view('brand.index', ['arr' => Brand::all()]);
    }

=======
 
class BrandController extends Controller
{
    // load index
    function index(){
        $arr = Brand::all();
        //var_dump($arr);
        $v = view('brand.index', ['arr' => $arr]);
        //var_dump($v);
        return $v;
    }
    // edit method
    function edit(int $id, Request $r){
        $msg = NULL;
        if($r->isMethod('post')){
            $data = $r->validate(['name' => 'required']);
            if(Brand::edit($id, $data)){
                return redirect('/brand');
            }
            $msg = 'Edit Failed';
        }
        return view('brand.edit', ['v' => Brand::findOrFail($id), 'msg' => $msg]);
    }
    // add method
>>>>>>> ec25080 (backup for wls)
    function add(Request $req){
        $msg = NULL;
        if($req->isMethod('post')){
            $data = $req->validate(['name' => 'required']);
<<<<<<< HEAD
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
=======
            $ret = Brand::create($data);
            function index(){
                return view('brand.index', ['arr' => Brand::all()]);
            }    if($ret){
                return redirect('/brand');
            }
            $msg = 'Insert Failed';
            //var_dump($ret);
        }
        return view('brand.add', ['msg' => $msg]);
    }
    // load details method
    function details(int $id){
        return view('brand.details', ['v' => Brand::findOrFail($id)]);
    }
    // delete method
    function delete(int $id){
        $ret = Brand::remove($id);
>>>>>>> ec25080 (backup for wls)
        if($ret){
            return redirect('/brand');
        }
        return redirect('/brand/error');
<<<<<<< HEAD
    }

    function edit(int $id, Request $rq){
        $msg = '';
        if($rq->isMethod('post')){
            $data = $rq->validate(['name' => 'required']);
            if(Brand::edit($id, $data)){
                return redirect('/brand');
            }else{
                $msg = 'Edit Failed !';
            }
        }
        return view('brand.edit', ['v' => Brand::findOrFail($id), 'msg' => $msg]);
=======
        //var_dump($ret);
>>>>>>> ec25080 (backup for wls)
    }
}
