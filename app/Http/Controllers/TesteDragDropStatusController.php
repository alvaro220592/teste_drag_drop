<?php

namespace App\Http\Controllers;

use App\Models\TesteDragDropStatus;
use Illuminate\Http\Request;

class TesteDragDropStatusController extends Controller
{
    public function index()
    {
        $status = TesteDragDropStatus::all();
        return view('teste_drag_drop', compact('status'));
    }
}
