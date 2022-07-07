<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTablesseederes extends Seeder
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

                "title"=>"Fruit and vegetables and protection against diseases",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "author"=>2,
                "image"=>"FeatureImage1.png",
                "categorie"=>"fashion",
                "published_at"=>now()
            ],
            [

                "title"=>"Asparagus Spring Salad with Rocket, Goat's Cheese",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "author"=>3,
                "image"=>"FeatureImage.png",
                "categorie"=>"fashion",
                "published_at"=>now()
            ],
        ];

        DB::table('articles')->insert($data);
    }
}
