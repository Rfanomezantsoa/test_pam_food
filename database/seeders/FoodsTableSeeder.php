<?php

namespace Database\Seeders;

use App\Models\meal\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
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
                "name"=>"Deep Sea Snow White Cod Fillet",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$MAINS )->value('id'),
                "price"=>20
            ],
            [
                "name"=>"Steak With Rosemary Butter",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$MAINS )->value('id'),
                "price"=>22
            ],
            [
                "name"=>"Steaks with Grilled Kimchi",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$MAINS )->value('id'),
                "price"=>20
            ],
            [
                "name"=>"Cucumber Salad",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$STARTERS )->value('id'),
                "price"=>20
            ],
            [
                "name"=>" Basil Pancakes",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$STARTERS )->value('id'),
                "price"=>18
            ],
            [
                "name"=>"Grilled Okra and Tomatoes ",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$STARTERS )->value('id'),
                "price"=>12
            ],
            [
                "name"=>"Wine Pairing",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$PASTRIES_AND_DRINKS )->value('id'),
                "price"=>158
            ],
            [
                "name"=>"Natural Wine Pairing",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$PASTRIES_AND_DRINKS )->value('id'),
                "price"=>168
            ],
            [
                "name"=>"Whisky Flyer",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "menu_id"=>Menu::where('label', Menu::$PASTRIES_AND_DRINKS )->value('id'),
                "price"=>90
            ]
        ];
        DB::table("foods")->insert($data);
    }
}
