<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Menu;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index():View
    {
        //メニューの全件取得
        $menus = Menu::all();

        //??menusというキーでビューへ渡す
        return view('menu.index',['menus'=>$menus]);
    }

    public function add()
    {
        return view('menu.add');
    }
    public function create(Request $request)
    {
        $menu = new Menu();
        $menu->id=$request->id;
        $menu->drink=$request->drink;
        $menu->other=$request->other;

        $menu->save();
        return redirect()->route('menus.index');

    }

    public function destroy(Menu $menu):RedirectResponse
    {
        DB::transaction(function() use($menu){
            //削除
            $menu->delete();
        });
        return redirect()->route('menus.index');
}

public function new()
{
    return redirect()->route('menu.update');
}
}
