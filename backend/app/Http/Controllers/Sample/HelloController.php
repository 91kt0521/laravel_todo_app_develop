<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HelloController extends Controller
{
    public function index (Request $request)
    {
        // var_dump($request->url());
        // $message = '';
        // return view('samples.index', compact('message'));
        // $datas = ['one', 'two', 'three', 'four', 'five'];
        // var_dump($datas);
        var_dump(2);

        return view('samples.index', ['data' => $request->data]);
    }

    public function post (Request $request)
    {
        $message = $request->name;
        $val = $request->all();
        // var_dump($val);
        return view('samples.index', compact('message'));
    }
}
