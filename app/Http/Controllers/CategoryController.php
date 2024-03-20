<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Category $category)
    {
        return view('manager.create')->with(['category' => $category->get()]);
    }
}
