<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {      
        $obj = new Category();
        $categories = $obj->pluck('category_name', 'category_id');
        $cats = $obj->paginate(2);
        return view('categories',['categories'=>$categories],['cats'=>$cats]);
    }
}
