<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus=[
            ['drink'=>'GreenTea'],
            ['drink'=>'Water'],
            ['drink'=>'INU'],
            ['drink'=>'Ukiwa'],
            ['drink'=>'Warabe'],
            ['drink'=>'Enogu'],
            ['drink'=>'熱帯魚'],
            ['drink'=>'アイスコーヒー'],
            ['drink'=>'水道水'],
            ['drink'=>'ミネラルウォーター'],
            ['drink'=>'水'],
            ['drink'=>'天然水'],
            ['drink'=>'小夜'],
            ['drink'=>'よまいとけ'],
            ['drink'=>'けびいし'],
            ['drink'=>'詩'],
            ['drink'=>'シアノトキシン'],

        ];

        foreach($menus as $menu){
            Menu::create($menu);
        }
        
    }
}
