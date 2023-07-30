<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [articleController::class, 'index'])->name('articleIndex');
Route::get('/add', [articleController::class, 'add'])->name('articleAdd');
Route::post('/create', [articleController::class, 'create'])->name('articleCreate');
Route::get('/edit/{articles}', [articleController::class, 'edit'])->name('articleEdit');
Route::put('/update/{articles}', [articleController::class, 'update'])->name('articleUpdate');
Route::get('/delete/{articles}', [articleController::class, 'delete'])->name('articledelete');
