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
}
