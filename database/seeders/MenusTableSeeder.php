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
        ];

        foreach($menus as $menu){
            Menu::create($menu);
        }
        
    }
}
