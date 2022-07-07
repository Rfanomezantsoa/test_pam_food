<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservationControllerTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_block_uncomplet_anduncorrect_data_to_create()
    {
        $data=[
            'last_name'=>"name",
            'email'=>'mail',
            'phone'=>'phone',
            'date_reservation'=>date('Y m d'),
            "number"=>-1
        ];

        $response = $this->postJson('api/reservations/', $data);


        $response->assertStatus(422);
    }
    public function test_correct_data_to_create()
    {
        $data=[
            'first_name'=>'Rakoto',
            'last_name'=>"Ligth",
            'email'=>'mail@gmail.com',
            'phone'=>'0383456765',
            'hour_reservation'=> "12:03",
            'date_reservation'=> "2022-08-07" ,
            "number"=>1
        ];

        $response = $this->postJson('api/reservations/', $data);
        $response->assertStatus(202);
    }
    public function test_delete_reservation()
    {
        $data=[
            'first_name'=>'Rakoto',
            'last_name'=>"Ligth",
            'email'=>'mail@gmail.com',
            'phone'=>'0383456765',
            'hour_reservation'=> "12:03",
            'date_reservation'=> "2022-08-07" ,
            "number"=>1
        ];

        $response = $this->postJson('api/reservations/', $data);
        $response = $this->delete('api/reservations/1');
        $response->assertStatus(202);
    }

    public function test_validate_reservation()
    {

        $data=[
            'first_name'=>'Faly',
            'last_name'=>"Ligth",
            'email'=>'mail@gmail.com',
            'phone'=>'0383456765',
            'hour_reservation'=> "12:03",
            'date_reservation'=> "2022-08-07" ,
            "number"=>1
        ];

        $this->postJson('api/reservations/', $data);
        $response = $this->put('api/reservations/validate/1');
        $response->assertStatus(202);
    }
    public function test_unvalidate_reservation()
    {

        $data=[
            'first_name'=>'Rivo',
            'last_name'=>"Ligth",
            'email'=>'mail@gmail.com',
            'phone'=>'0383456765',
            'hour_reservation'=> "12:03",
            'date_reservation'=> "2022-08-07" ,
            "number"=>1
        ];

        $this->postJson('api/reservations/', $data);
        $response = $this->put('api/reservations/unvalidate/1');
        $response->assertStatus(202);

    }
}
