<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HelloRequest;
use App\Models\Test;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    const TABLE = 'tests';

    public function index (Request $request)
    {
        return view('samples.index', ['data' => $request->data]);
    }

    public function store (HelloRequest $request)
    {
        $param = [
            'name' => $request->name,
            'age' => $request->age,
            'mail' => $request->mail,
        ];
        DB::table(self::TABLE)->insert($param);
        return redirect('/index/show');
    }

    public function show($id = NULL)
    {
        $items = Test::all();
        return view('samples.show', ['items' => $items]);
    }

    public function find(Request $request)
    {
        $findItems = Test::find($request->findId);
        return view('samples.show', ['findItems' => $findItems]);
    }

    public function edit($id)
    {
        $item = DB::table(self::TABLE)->where('id', $id)->first();
        return view('samples.edit', ['items' => $item]);
    }

    public function update(Request $request, $id)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'age' => $request->age,
            'mail' => $request->mail,
        ];
        DB::table(self::TABLE)->where('id', $id)->update($param);
        return redirect('/index/show');
    }

    public function destroy($id)
    {
        DB::table(self::TABLE)->where('id', $id)->delete();
        return redirect('/index/show');
    }
}
