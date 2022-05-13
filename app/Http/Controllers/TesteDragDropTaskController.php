<?php

namespace App\Http\Controllers;

use App\Models\TesteDragDropTask;
use Illuminate\Http\Request;

class TesteDragDropTaskController extends Controller
{
    public function editTaskStatus($task_id, $status_id)
    {
        $task = TesteDragDropTask::find($task_id);
        $task->teste_drag_drop_status_id = $status_id;
        $task->update();
    }
}
