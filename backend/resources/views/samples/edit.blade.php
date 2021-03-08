
@extends('layouts.master_bootstrap')
@section('title', 'ララベル 本 勉強用')

@section('content')
    <div class="container mt-5">
        {!! Form::open(['route' => ['index.update', $items->id], 'method' => 'PUT']) !!}
            @csrf
            <input type="hidden" name="id" value="{{$items->id}}">
            <div class="mb-3 col-4">
                <label for="exampleInputName" class="form-label">名前</label>
                <input type="name" class="form-control" id="inputName" aria-describedby="Name" name="name" value="{{$items->name}}">
                <div id="inputName" class="form-text">※ニックネームでも構いません。</div>
            </div>
            <div class="mb-3 col-4">
                <label for="inputAge" class="form-label">年齢</label>
                <input type="age" class="form-control" id="inputAge" name="age" value="{{$items->age}}">
            </div>
            <div class="mb-3 col-4">
                <label for="inputmail" class="form-label">メールアドレス</label>
                <input type="mail" class="form-control" id="inputmail" name="mail" value="{{$items->mail}}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark">更新</button>
        {!! Form::close() !!}
    </div>
@endsection
