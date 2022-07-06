<?php

namespace Database\Seeders;

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
                "name"=>"Rillette de Langouste",
                "description"=>"Rillette de Langouste sur tartare de Mangue, Mousse de pomme au Caviar de Chocolat. SPECIALITE DU CHEF Lobster Rillette on Mango Tartare, Apple mousse and Chocolate Caviar",
            ],
            [
                "name"=>"Terrine de Foie Gras",
                "description"=>"Terrine de Foie Gras Maison à la Truffe de Cacao et Gingembre. SPECIALITE DU CHEF Homemade Foie Gras with Cocoa Truffe and Ginger"
            ],
            [
                "name"=>"Poele de Magret de Canard",
                "description"=>"Poêlé de Magret de Canard, sauce chocolat, Arancini et Pomme fruit caramélisée. SPECIALITE DU CHEF. Seared Duck Breast, Chocolat Sauce, Arancini and Caramelized Apple"
            ],
            [
                "name"=>"Gambas Poele au Chocolat",
                "description"=>"Gambas Poêlé au Chocolat, Arancini et Pomme fruit caramélisée. SPECIALITE DU CHEF Seared Prawns with Chocolate sauce, Arancini and Caramelized Apple"
            ],
            [
                "name"=>"Larme au chocolat blanc",
                "description"=>"Larme au chocolat blanc et marmelade de fruit, caviar de cacao. SPECIALITE DU CHEF White chocolate tear and fruits marmelade, cocoa caviar"
            ],
            [
                "name"=>"Mousse de litchi sur son biscuit",
                "description"=>"Mousse de litchi sur son biscuit au gingembre, rhum raisin et sorbet mangue. Flitchi mousse on its ginger biscuit, grape rum and mango sorbet   "
            ],
            [
                "name"=>"La citronnade",
                "description"=>"A la différence de l’eau citronnée, la citronnade contient un peu de sucre et de l’orange pour adoucir l’acidité du citron. Elle conviendra donc aux clients qui souhaiteraient quelque chose de plus relevé et plus sucré"
            ],
            [
                "name"=>"L’infusion de Fraises",
                "description"=>"Ingrédients nécessaires : eau, fraises.\nMode de préparation : Mettez des fraises entières dans de l’eau fraîche. Servez immédiatement."
            ]
        ];
        DB::table("foods")->insert($data);
    }
}
