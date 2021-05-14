@extends('layouts.master_bootstrap')
@section('title', 'TODO LIST APP')


@section('content')

<div class='container mt-3'>
    <h1>TODOリスト</h1>
</div>
<div class="container mt-3">
{{-- エラー表示 ここから --}}
        @if ($errors->has('category'))
            <p class="alert alert-danger">{{ $errors->first('category') }}</p>
        @endif
        @if ($errors->has('newTodo'))
            <p class="alert alert-danger">{{ $errors->first('newTodo') }}</p>
        @endif
        @if ($errors->has('newDeadline'))
            <p class="alert alert-danger">{{ $errors->first('newDeadline') }}</p>
        @endif
    {{-- エラー表示 ここまで --}}
</div>
<div class="container mt-3">
    <div class='container mt-2'>
        {!! Form::open(['route' => 'todo.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class='form-group mb-4'>
            <h6>カテゴリ</h6>
            <div class="form-check form-check-inline">
                {{Form::radio('category', '1', false, ['class'=>'form-check-input'])}}
                {{Form::label('flexRadioDefault1', '勉強', ['class'=>'form-check-label'])}}
            </div>
            <div class="form-check form-check-inline">
                {{Form::radio('category', '2', false, ['class'=>'form-check-input'])}}
                {{Form::label('flexRadioDefault1', 'トレーニング', ['class'=>'form-check-label'])}}
            </div>
            <div class="form-check form-check-inline">
                {{Form::radio('category', '3', false, ['class'=>'form-check-input'])}}
                {{Form::label('flexRadioDefault1', '私用', ['class'=>'form-check-label'])}}
            </div>
            <div class="form-check form-check-inline">
                {{Form::radio('category', '4', false, ['class'=>'form-check-input'])}}
                {{Form::label('flexRadioDefault1', 'その他', ['class'=>'form-check-label'])}}
            </div>
        </div>
        <div class='row'>
            {{Form::text('newTodo', null, ['class'=>'form-control col-8 mr-5'])}}
            {{Form::date('newDeadline', null, ['class'=>'mr-5'])}}
            {{Form::submit('新規追加', ['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col" style="width: 15%;">カテゴリ</th>
                <th scope="col" style="width: 60%;">TODO</th>
                <th scope="col">期限</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo->category_id }}</td>
                    <th>{{ $todo->todo }}</th>
                    <td>{{ $todo->deadline }}</td>
                    <td><a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-primary">編集</td>
                    {!! Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'POST' ]) !!}
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                        <td>{{ Form::submit('削除',['class'=>"btn btn-danger"]) }}</td>
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
