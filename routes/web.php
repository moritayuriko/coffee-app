<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('menus', [MenuController::class, 'index'])->name('menus.index');

Route::get('drink.add', [MenuController::class, 'add'])->name('menu.add');
Route::post('drink.added', [MenuController::class, 'create'])->name('menu.added');

// メニュー項目を削除するためのルート
Route::delete('menus/{menu}', [MenuController::class, 'destroy'])
->where('menu', '[0-9]+')
->name('menus.destroy');
//更新ページの表示
Route::get('new', [MenuController::class, 'new'])->name('menus.edit');
//更新処理
Route::put('up', [MenuController::class, 'update'])->name('menu.up');


