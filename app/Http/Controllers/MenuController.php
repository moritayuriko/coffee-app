<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Menu;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(): View
    {
        //メニューの全件取得
        $menus = Menu::all();

        //??menusというキーでビューへ渡す
        return view('menu.index', ['menus' => $menus]);
    }

    //追加機能の実装はこの部分
    public function add()
    {
        return view('menu.add');
    }
    public function create(Request $request)
    {
        $menu = new Menu();
        $menu->id = $request->id;
        $menu->drink = $request->drink;
        $menu->other = $request->other;
       
         // 画像保存処理
         if($request->imagePath) {
            //この保存がうまく動かないからフォルダーに入らない。保留！
            // $path = Storage::disk('public')->putFile('image',$request->imagePath);
            $menu->imagePath = 'image/'.basename($request->imagePath);
        } else {
            $path = null;
        }

        $menu->save();
        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        DB::transaction(function () use ($menu) {
            //削除
            $menu->delete();
        });
        return redirect()->route('menus.index');
    }


    // 更新フォームの表示
    public function edit(Menu $menu)
    {
        return view('menu.update', ['menu' => $menu]);
    }

    // 更新機能
    public function update(Request $request, Menu $menu)
    {
        // バリデーションを今度追加したい！

        $menu->drink = $request->input('drink');
        $menu->other = $request->input('other');
        $menu->imagePath = $request->input('imagePath');
        $menu->save();

        return redirect()->route('menus.index');
    }

    //カート機能を作りたい！
    

}
