<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        // dd($categories);
        // ...
        // ...
        
        // 1
        // return view('categories.lista', [
        //     "categories" => $categories
        // ]);

        // 2
        return view('categories.lista', compact("categories") );


    }

}
