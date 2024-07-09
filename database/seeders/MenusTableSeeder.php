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
            ['drink'=>'GreenTea',
        'other'=>'粉の味がする','imagePath'=>'image/150.png'],
            ['drink'=>'Water',
            'other'=>'馴染みのある味','imagePath'=>'image/150.png'],
            ['drink'=>'INU',
            'other'=>'とてもかわいい','imagePath'=>'image/150.png'],
            ['drink'=>'Ukiwa',
            'other'=>'海水浴日和だ！','imagePath'=>'image/150.png'],
            ['drink'=>'Warabe',
            'other'=>'手毬なイメージ','imagePath'=>'image/150.png'],
            ['drink'=>'Enogu',
            'other'=>'食べるな危険','imagePath'=>'image/150.png'],
            ['drink'=>'熱帯魚',
            'other'=>'飼いたいな…って','imagePath'=>'image/150.png'],
            ['drink'=>'アイスコーヒー',
            'other'=>'飲むとハッピーになる。','imagePath'=>'image/150.png'],
            ['drink'=>'水道水',
            'other'=>'馴染みのある味','imagePath'=>'image/150.png'],
            ['drink'=>'ミネラルウォーター',
            'other'=>'柔らかい…らしい？','imagePath'=>'image/150.png'],
            ['drink'=>'水',
            'other'=>'馴染みのある味','imagePath'=>'image/150.png'],
            ['drink'=>'天然水',
            'other'=>'スッキリしてる…？らしい','imagePath'=>'image/150.png'],
            ['drink'=>'シアノトキシン'],

        ];
    

        foreach($menus as $menu){
            Menu::create($menu);
        }
        
    }
}
