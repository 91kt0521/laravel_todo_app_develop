<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index (Request $request)
    {
        return view('samples.index', ['data' => $request->data]);
    }

    public function store (HelloRequest $request)
    {
        $message = $request->name;

        return view('samples.index', compact('message'));
    }

    public function show($id = NULL)
    {
        $items = DB::select('select * from test');
        return view('samples.show', ['items' => $items]);
    }
}
