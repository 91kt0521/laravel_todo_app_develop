
@extends('layouts.master_bootstrap')
@section('title', 'ララベル 本 勉強用')

@section('content')
    <div class="container mt-5">
        <!-- 条件 -->
        @isset ($message)
            <h1>{{$message}}</h1>
        @else
            <h1>未入力です</h1>
        @endisset

        <!-- ミドルウェア利用 -->
        <!-- @isset ($data)
            @foreach ($data as $item)
                <p>{{$item['name']}}  {{$item['mail']}}</p>
            @endforeach
        @endisset -->

        @isset($message)
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

            <p>Viewコンポーサー Value <br> 'view_message' = {{$view_message}}</p>

        @endempty

        <form method="POST" action="/index">
            @csrf
            <div class="mb-3 col-4">
                <label for="exampleInputName" class="form-label">名前</label>
                @error('name')
                    <p class=text-danger>{{$message}}</p>
                @enderror
                <input type="name" class="form-control" id="inputName" aria-describedby="Name" name="name">
                <div id="inputName" class="form-text">※ニックネームでも構いません。</div>
            </div>
            <div class="mb-3 col-4">
                <label for="inputAge" class="form-label">年齢</label>
                @error('age')
                    <p class=text-danger>{{$message}}</p>
                @enderror
                <input type="age" class="form-control" id="inputAge" name="age">
            </div>
            <div class="mb-3 col-4">
                <label for="inputmail" class="form-label">メールアドレス</label>
                    @error('mail')
                        <p class=text-danger>{{$message}}</p>
                    @enderror
                <input type="mail" class="form-control" id="inputmail" name="mail">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark">ボタン</button>
        </form>
    </div>
@endsection
