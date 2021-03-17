<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('tasks.index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'newTodo' => 'required|max:100',
            'newDeadline' => ' nullable|after:"now"'
        ]);

        // DBに保存する
        Todo::create([
            'category_id' => $request->category,
            'todo' => $request->newTodo,
            'deadline' => $request->newDeadline,
        ]);

        return redirect('task/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 編集データを取得
        $todos = Todo::find($id);

        //画面表示
        return view('tasks.edit', ['todo' => $todos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 更新バリデーション
        $request->validate([
            'updateTodo' => 'required|max:100',
            'updateDeadline' => ' nullable|after:"now"'
        ]);

        $todo = Todo::find($id);

        $todo->todo = $request->updateTodo;
        $todo->deadline = $request->updateDeadline;

        $todo->save();
        return redirect('task/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
