
@extends('layouts.master_bootstrap')
@section('title', 'ララベル 本 勉強用')

@section('content')
    <div class="container mt-5">
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>mail</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->mail}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
