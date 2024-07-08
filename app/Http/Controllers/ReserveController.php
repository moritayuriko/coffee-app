<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class ReserveController extends Controller
{
    public function shop()
    {
        $menus = Menu::all();
        return view('page/reserve',compact('menus'));
    }
    }
   
