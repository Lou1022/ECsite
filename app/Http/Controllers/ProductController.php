<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)//useでインポートしたProductクラスを引数にして、インスタンス化してる
    {
        return $product->get();//戻り値は変数の中身
    }
}
