<?php

use App\Http\Controllers\TesteDragDropStatusController;
use App\Http\Controllers\TesteDragDropTaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste_drag_drop', [TesteDragDropStatusController::class, 'index']);
Route::put('/teste_drag_drop/update/{task_id}/{status_id}', [TesteDragDropTaskController::class, 'editTaskStatus'])->name('editTaskStatus');