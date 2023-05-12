<?php

use Illuminate\Support\Facades\Route;
use illuminate\Routing\Redirector;
use App\Http\Controllers\TodoController;
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
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/', [TodoController::class, 'index']);

Route::get('create', [TodoController::class, 'create']);

Route::get('details', [TodoController::class, 'details']);

Route::get('details/{todo}', [TodoController::class, 'details']);

Route::get('edit', [TodoController::class, 'edit']);

Route::get('edit/{todo}', [TodoController::class, 'edit']);

Route::post('update', [TodoController::class, 'update']);

Route::post('update/{todo}', [TodoController::class, 'update']);

Route::get('delete', [TodoController::class, 'delete']);

Route::get('delete/{todo}', [TodoController::class, 'delete']);

Route::post('store-data', [TodoController::class, 'store']);

Route::get('search', [TodoController::class, 'search'])->name('search');
