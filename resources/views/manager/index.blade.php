<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                           <li><a class="dropdown-item active" href="/manager">全てのカテゴリー</a></li>
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
        <div class="d-flex flex-column flex-grow-1 my-5 row-gap-5 align-items-center">
            @foreach ($products as $product)
                <div class="card shadow d-flex" style="width: 50%;">
                    <div class="card-header bg-dark text-white">{{ $product->category->name }}</div>
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title p-2">{{ $product['name'] }}</h5>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 flex-grow-1">価格 {{ $product['price'] }}円</div>
                            <div class="p-2">在庫数 {{ $product['amount'] }}</div>
                        </div>
                        <p class="card-text">{{ Str::limit($product['description'], 40) }}<a href="/manager/{{ $product->id }}">詳細</a></p>
                        <div class="col d-flex flex-row-reverse column-gap-2">
                            <a href="/manager/{{ $product->id }}/edit" class="btn btn-outline-primary">編集</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="align-items-center">
            {{ $products->links() }}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>