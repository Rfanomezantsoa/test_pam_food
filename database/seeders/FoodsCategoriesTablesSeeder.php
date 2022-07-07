<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsCategoriesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=[
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"starter")->value('id'),
        //         "food_id"=>DB::table('foods')->where('name','=',"Rillette de Langouste")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"starter")->value('id') ,
        //         "food_id"=>DB::table('foods')->where('name','=',"Terrine de Foie Gras")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"launch")->value('id'),
        //         "food_id"=>DB::table('foods')->where('name','=',"Poele de Magret de Canard")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"launch")->value('id'),
        //         "food_id"=>DB::table('foods')->where('name','=',"Gambas Poele au Chocolat")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"dinner")->value('id'),
        //         "food_id"=>DB::table('foods')->where('name','=',"Larme au chocolat blanc")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"dessert")->value('id') ,
        //         "food_id"=>DB::table('foods')->where('name','=',"Mousse de litchi sur son biscuit")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"drink")->value('id'),
        //         "food_id"=>DB::table('foods')->where('name','=',"La citronnade")->value('id')
        //     ],
        //     [
        //         "category_id"=>DB::table('categories')->where('designation','=',"drink")->value('id') ,
        //         "food_id"=>DB::table('foods')->where('name','=',"L’infusion de Fraises")->value('id')
        //     ]
        // ];
        // DB::table('food_category')->insert($data);
    }
}
