<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index():View
    {
        //メニューの全件取得
        $menus = Menu::all();

        //??menusというキーでビューへ渡す
        return view('menu/index',['menus'=>$menus]);
    }


    public function add()
    {
        
        return view('menu/add');
    }
    public function create()
{
    return view('menus/create');
}

    public function edit($id)
{
    $menu = Menu::findOrFail($id);
    return view('menus/edit', ['menu' => $menu]);
}
}