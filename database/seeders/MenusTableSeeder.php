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
        'other'=>'粉の味がする'],
            ['drink'=>'Water',
            'other'=>'馴染みのある味'],
            ['drink'=>'INU',
            'other'=>'とてもかわいい'],
            ['drink'=>'Ukiwa',
            'other'=>'海水浴日和だ！'],
            ['drink'=>'Warabe',
            'other'=>'手毬なイメージ'],
            ['drink'=>'Enogu',
            'other'=>'食べるな危険'],
            ['drink'=>'熱帯魚',
            'other'=>'飼いたいな…って'],
            ['drink'=>'アイスコーヒー',
            'other'=>'飲むとハッピーになる。'],
            ['drink'=>'水道水',
            'other'=>'馴染みのある味'],
            ['drink'=>'ミネラルウォーター',
            'other'=>'柔らかい…らしい？'],
            ['drink'=>'水',
            'other'=>'馴染みのある味'],
            ['drink'=>'天然水',
            'other'=>'スッキリしてる…？らしい'],
            ['drink'=>'シアノトキシン'],

        ];

        foreach($menus as $menu){
            Menu::create($menu);
        }
        
    }
}
