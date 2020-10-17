<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
            $categorys=Category::all();
        return view('admin.category.index',compact('categorys'));
    }
}
