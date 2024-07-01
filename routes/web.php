<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('menus',[MenuController::class,'index']);

Route::get('menus/add', [MenuController::class, 'add'])->name('menus.add');
Route::get('menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::get('menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
