<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MyECsite</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style></style>
    </head>
    <body class="bg-body-secondary">
        <header class="sticky-top bg-dark">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow">
                <h5 class="my-0 mr-md-auto font-weight-normal flex-grow-1 text-white">MyEC</h5>
                <ul class="nav nav-underline justify-content-center">
                    <li class="nav-item text-center mx-5 dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            管理画面
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                           <li><a class="dropdown-item" href="/manager">全てのカテゴリー</a></li>
                           <li><hr class="dropdown-divider"></li>
                           @foreach ($category as $ctgry)
                                <li><a class="dropdown-item" href="#">{{ $ctgry['name'] }}</a></li>
                           @endforeach
                        </ul>
                    </li>
                    <li class="nav-item text-center mx-5">
                        <a class="nav-link col text-white" href="/manager/create">新規登録</a>
                    </li>
                    <li class="nav-item text-center mx-5">
                        <a class="nav-link col text-white disabled" href="#">未定</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="d-flex flex-column align-items-center">
            <div class="card shadow d-flex my-5" style="width: 50%; height: auto;">
                <div class="card-header bg-dark text-white">商品情報の編集</div>
                    <div class="card-body text-dark">
                        <form action="/manager/{{ $product->id }}" method="POST" class="row gap-3">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label for="categoryName" class="form-label">カテゴリー</label>
                                <select class="form-select" id="categoryName" name="product[category_id]">
                                    <option selected disabled>1つ選んでください</option>
                                    @foreach ($category as $ctg)
                                    <option value="{{ $ctg['id'] }}" {{ $product->category_id == $ctg->id ? 'selected' : '' }}>{{ $ctg['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-danger">{{ $errors->first('product.category_id') }}</p>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">商品名</label>
                                <input type="text" name="product[name]" class="form-control" id="inputName" value="{{ $product->name }}">
                            </div>
                            <p class="text-danger">{{ $errors->first('product.name') }}</p>
                            <div class="col-md-12">                                
                                <label for="explainarea" class="form-label">商品説明</label>
                                <textarea name="product[description]" class="form-control" id="explainarea" rows="7">{{ $product->description }}</textarea>
                            </div>
                            <p class="text-danger">{{ $errors->first('product.description') }}</p>
                            <div class="col-md-6">
                                <label for="inputPrice" class="form-label">金額</label>
                                <div class="input-group">
                                    <input type="price" name="product[price]" class="form-control" id="inputPrice" value="{{ $product->price }}">
                                    <span class="input-group-text">円</span>
                                </div>
                            </div>
                            <p class="text-danger">{{ $errors->first('product.price') }}</p>
                            <div class="col-md-4">
                                <label for="inputAmount" class="form-label">個数</label>
                                <input type="number" name="product[amount]" class="form-control" id="inputAmount" value="{{ $product->amount }}">
                            </div>
                            <p class="text-danger">{{ $errors->first('product.amount') }}</p>
                            <div class="col-md-12">
                                <label for="formFile" class="form-label">商品画像</label>
                                <input class="form-control" name="product[main_image]" type="file" id="formFile" value="{{ $product->main_image }}">
                            </div>
                            <p class="text-danger">{{ $errors->first('product.main_image') }}</p>
                            <div class="d-flex flex-row-reverse column-gap-2">
                                <button type="submit" class="btn btn-outline-primary" value="update">保存</button>
                            </div>
                        </form>
                        <div class="d-flex flex-row-reverse column-gap-2 mt-2">
                            <form action="/manager/{{ $product->id }}" id="form_{{ $product->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick='return deleteProduct()'>削除</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            function deleteProduct() {
                var res = confirm('一度削除すると復元できません。\n本当に削除しますか？');
                if (res == true) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </body>
</html>