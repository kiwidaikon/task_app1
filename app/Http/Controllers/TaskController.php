<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // showページへ移動
    public function show($id)
    {
        $task = task::find($id);
        return view('tasks.show', ['task' => $task]);
    }
}
