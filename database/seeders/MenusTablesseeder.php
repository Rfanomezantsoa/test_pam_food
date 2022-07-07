<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTablesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                "name"=>'starters',
                "label"=>'starters',
                "description"=>"This is a section of your menu. Give your section a brief description"
            ],
            [
                "name"=>'mains',
                "label"=>'mains',
                "description"=>"This is a section of your menu. Give your section a brief description"
            ],
            [
                "name"=>'pastries & drinks',
                "label"=>'pastriesdrinks',
                "description"=>"This is a section of your menu. Give your section a brief description"
            ],
            [
                "name"=>'our menu',
                "label"=>'ourmenu',
                "description"=>"This is a section of your menu. Give your section a brief description"
            ]
        ];

        DB::table('menus')->insert($data);
    }
}
