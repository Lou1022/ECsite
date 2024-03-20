<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(Product $product, Category $category)//useでインポートしたProductクラスを引数にして、インスタンス化してる
    {
        //view(表示させたいblade.phpファイル)
        //with([blade内で使う変数名 => 値])
        //今回の例だとproductモデルクラスで定義されてる変数で、getでproductテーブルの中身。
        return view('manager.index')
            ->with(['products' => $product->getPaginateByLimit()])
            ->with(['category'=>$category->get()]);
    }
    
    public function show(Product $product, Category $category)
    {
        return view('manager.show')
            ->with(['product'=>$product])
            ->with(['category'=>$category->get()]);
    }
    
    public function store(ProductRequest $request, Product $product)
    {
        $input = $request['product'];
        $product->fill($input)->save();
        return redirect('/manager/' . $product->id);
    }
}
