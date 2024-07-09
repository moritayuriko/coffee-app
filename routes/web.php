<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReserveController;

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

//更新

Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');

//お客側のメニュー一覧・選択画面

Route::get('page/reserve',[ReserveController::class,'shop'])->name('reserve');


//カート

Route::get('page/myCart', [StockController::class, 'myCart'])->name('myCart');
