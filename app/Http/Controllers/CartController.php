<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        // カート情報の取得、ユーザーIDと紐づける感じ
        $cartItems = CartItem::where('user_id', auth()->id())->with('menu')->get();

        return view('cart.index', compact('cartItems'));
    }

    /**
     * カートへの追加昨日
     */
    public function addToCart(Request $request)
    {
        
        //インスタンス！
        $cartItem = new CartItem();
        $cartItem->user_id = auth()->id();
        $cartItem->menu_id = $request->menu_id;
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'カートに商品を追加しました。');
    }

    /**
     * カートからアイテムを削除する
     */
    public function removeFromCart($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'カートから商品を削除しました。');
    }
}