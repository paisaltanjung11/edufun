<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function getCategoryById($id){
        $category = Category::with(['article.author', 'article.category'])->find($id);
        // dd($category);
        return view('main.category',['category'=> $category]);
    }

    public function getAllCategories()
    {
        $categories = Category::distinct()->orderBy('id')->get();
        return view('main.categories', ['categories' => $categories]);
    }
}
