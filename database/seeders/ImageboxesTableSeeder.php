<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageboxesTableSeeder extends Seeder
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
                "title"=>'Start to plan your diet today',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque congue arcu',
                "image"=>'box-Image.png'
            ],
            [
                "title"=>'',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque congue arcu',
                "image"=>'box-Image2.png'
            ],

        ];

        DB::table('imageboxes')->insert($data);
    }
}
