<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HelloController extends Controller
{
    public function index ()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('samples.index', compact('hello'));
    }
}
