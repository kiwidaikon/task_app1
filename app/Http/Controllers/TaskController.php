<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $tasks = task::all();
        // memosディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('tasks.index', ['tasks' => $tasks]);
    }

    // showページへ移動
    public function show($id)
    {
        $task = task::find($id);
        return view('tasks.show', ['task' => $task]);
    }
}
