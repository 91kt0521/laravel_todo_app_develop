@extends('layouts.master_bootstrap')
@section('title', 'TODO LIST APP')


@section('content')

<div class='container mt-3'>
    <h1>TODOリスト編集</h1>
</div>
<div class="container mt-3">
{{-- エラー表示 ここから --}}
        @if ($errors->has('updateTodo'))
            <p class="alert alert-danger">{{ $errors->first('updateTodo') }}</p>
        @endif
        @if ($errors->has('updateDeadline'))
            <p class="alert alert-danger">{{ $errors->first('updateDeadline') }}</p>
        @endif
    {{-- エラー表示 ここまで --}}
</div>
<div class="container mt-3">
    <div class="container mb-4">
        {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'POST']) !!}
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        {{ Form::hidden('updateCategory', $todo->category_id) }}
        <div class="row">
            {{Form::text('updateTodo', $todo->todo, ['class'=>'form-control col-7 mr-4'])}}
            {{Form::date('updateDeatline', $todo->deadline, ['class'=>'mr-4'])}}
            {{Form::submit('Todo更新', ['class'=>'btn btn-primary mr-3'])}}
            <a class="btn btn-danger" href="{{route('todo.index')}}">戻る</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
