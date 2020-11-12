<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
            $categorys=Category::where('parent_id',null)->get();
        return view('admin.category.index',compact('categorys'));
    }
    public function store(Request $request){
       $categorys= new Category;
       $categorys->slug=$request->slug;
       $categorys->name=$request->name;
       $categorys->parent_id=$request->parent_id;
       $categorys->icon=$request->icon;
       $categorys->save();
       return redirect()->back();

    }
}
