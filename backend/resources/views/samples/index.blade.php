
    @extends('layouts.master_bootstrap')
    @section('title', 'ララベル 本 勉強用')
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    @section('content')
        <div class="container mt-5">
            <!-- 条件 -->
            @isset ($message)
                <h1>{{$message}}</h1>
            @else
                <h1>未入力です</h1>
            @endisset

            <!-- 繰り返し処理&loop変数 -->
            @isset ($datas)
                @foreach ($datas as $data => $item)
                    @if ($loop->first)
                        <p>----ここから</p>
                    @endif
                        <p>NO,{{$loop->iteration}} . {{$item}}</p>
                    @if ($loop->last)
                        <p>----ここまで</p>
                    @endif
                @endforeach
            @endisset

            <!-- 条件付き繰り返し処理 -->
            @for ($i=1; $i < 30; $i++)
                @if ($i % 2 === 1)
                    @continue
                @elseif ($i <= 10)
                    <p>{{$i}}</p>
                @else
                    @break
                @endif

            @endfor
            <form method="POST" action="/index">
                @csrf
                <div class="mb-3 col-4">
                    <label for="exampleInputName" class="form-label">名前</label>
                    <input type="name" class="form-control" id="inputName" aria-describedby="Name" name="name">
                    <div id="inputName" class="form-text">ニックネームでも構いません。</div>
                </div>
                <div class="mb-3 col-4">
                    <label for="inputPassword1" class="form-label">パスワード</label>
                    <input type="password" class="form-control" id="inputPassword1" name="paswword">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-dark">ボタン</button>
            </form>
        </div>
    @endsection
