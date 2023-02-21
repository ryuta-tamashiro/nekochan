<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NekochansController;

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


Route::get('/nekochan', [NekochansController::class, 'index'])->name('nekochan');
Route::get('/nekochan/craete', [NekochansController::class, 'create'])->name('nekochan.create');
Route::post('/nekochan/store', [NekochansController::class, 'store'])->name('nekochan.store');
Route::get('/nekochan/show/{id}', [NekochansController::class, 'show'])->name('nekochan.show');
Route::get('/nekochan/edit/{id}', [NekochansController::class, 'edit'])->name('nekochan.edit');
Route::post('/nekochan/update/{id}', [NekochansController::class, 'update'])->name('nekochan.update');