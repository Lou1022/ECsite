<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyECsite</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
        </style>
    </head>
    <body class="bg-body-tertiary">
        <header class ="d-flex justify-content-center">
            <div><h1>My EC</h1></div>
        </header>
        <div class="d-flex justify-content-center">
            <div class="row container p-3 bg-secondary text-white">
                <div class="col">
                    <a>TEST</a>
                </div>
                <div class="col">
                    <a>TEST2</a>
                </div>
                <div class="col">
                    <a>TEST3</a>
                </div>
                <div class="col">
                    <a>TEST4</a>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-start">
            <div class="card m-5" style="width: 15rem;">
                <div class="card-header bg-secondary text-white">
                    カテゴリー
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        全てのカテゴリー
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">ゲーム</a>
                    <a href="#" class="list-group-item list-group-item-action">家具</a>
                    <a href="#" class="list-group-item list-group-item-action">食品</a>
                  </div>
            </div>
            <div class="d-flex flex-column mx-auto w-50 ms-4 me-5 my-5 row-gap-3">
                <div class="card">
                    <div class="card-header bg-secondary text-white">ゲーム</div>
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title p-2 flex-grow-1">PlayStation 5</h5>
                            <div class="p-2">価格 60000円</div>
                        </div>
                        <p class="card-text">Sonyから販売されている家庭用ゲーム機。</p>
                        <div class="col">
                            <a href="#" class="btn btn-outline-primary">編集</a>
                            <a href="#" class="btn btn-outline-danger">削除</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>