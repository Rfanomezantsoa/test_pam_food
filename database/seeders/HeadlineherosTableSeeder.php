<?php

namespace Database\Seeders;

use App\Models\aff\HeadlineHero;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadlineherosTableSeeder extends Seeder
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
                "page"=>'home',
                "title"=>'Healthy Eating is important part of lifestyle',
                "subtitle"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque congue arcu',
                "image"=>'Image-header-home.png'
            ],
            [
                "page"=>'menu',
                "title"=>'View Our New Menu',
                "subtitle"=>'The freshest ingredients for you every day',
                "image"=>''
            ],
            [
                "page"=>'reservation',
                "title"=>'Get in Touch',
                "subtitle"=>'The freshest ingredients for you every day',
                "image"=>''
            ],

        ];

        DB::table('headlineheros')->insert($data);

    }
}
