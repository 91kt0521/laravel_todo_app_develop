
@extends('layouts.master_bootstrap')
@section('title', 'ララベル 本 勉強用')

@section('content')
    <div class="container mt-5">

            {{Form::open(['url' => '/index/find', 'files' => true])}}

            {{ csrf_field() }}
            <!-- {{ method_field('SHOW') }} -->
            <table>
                <tr>
                    <td>{{Form::text('findId', null, ['class' => 'form-label', 'id' => 'findId', 'placeholder' => '検索するIDを入力'])}}</td>
                    <td>{{Form::submit('検索', ['class'=>'btn btn-primary btn-block'])}}</td>
                </tr>
            </table>

            {!! Form::close() !!}
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>mail</th>
                @if (isset($items))
                <th>削除</th>
                @endif
            </tr>
            @if (isset($items))
            @foreach($items as $item)
                <tr>
                    <td> <a href="/index/{{$item->id}}/edit">{{$item->id}}</a></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->mail}}</td>
                    {!! Form::open(['route' => ['index.destroy', $item->id], 'method' => 'POST']) !!}
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                        <td>{{ Form::submit('削除', ['class' => 'btn btn-danger']) }}</td>
                    {!! Form::close() !!}
                </tr>
            @endforeach
            @elseif (isset($findItems))
                <p>{{$findItems->getData()}}</p>
                <tr>
                    <td>{{$findItems->id}}</td>
                    <td>{{$findItems->name}}</td>
                    <td>{{$findItems->age}}</td>
                    <td>{{$findItems->mail}}</td>
                </tr>
            @endif
        </table>
        @if (isset($items))
            {{$items->links()}}
        @endif
</div>
@endsection
