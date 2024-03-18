<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)//useでインポートしたProductクラスを引数にして、インスタンス化してる
    {
        //view(表示させたいblade.phpファイル)
        //with([blade内で使う変数名 => 値])
        //今回の例だとproductモデルクラスで定義されてる変数で、getでproductテーブルの中身。
        return view('manager.index')->with(['products' => $product->getPaginateByLimit()]);
    }
}
