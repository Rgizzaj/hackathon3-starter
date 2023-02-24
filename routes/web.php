<?php

use App\Http\Controllers\AnimalController;
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

//create
Route::get('/owners/create', [AnimalController::class, 'create'])->name('owners.create');
//insert
Route::post('/owners', [AnimalController::class, 'insert'])->name('owners.insert');
Route::get('/owners/{id}', [AnimalController::class, 'detailOwner'])->name('owners.detail');
Route::get('/owners/edit/{id}', [AnimalController::class, 'edit'])->name('owners.edit');
Route::put('/owners/{id}', [AnimalController::class, 'update'])->name('owners.update');
Route::delete('/owners/{id}', [AnimalController::class, 'delete'])->name('owners.delete');

Route::get('/animals', [AnimalController::class, 'index']);
Route::get('/animals/{id}', [AnimalController::class, 'detail'])->name('animals.detail');
