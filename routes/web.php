<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('items/editStock', [ItemController::class, 'editStock'])->name('items.editStock');
Route::get('/updateStocke',[ItemController::class, 'updateStock'])->name('items.updateStock');
Route::resource('items', ItemController::class);

