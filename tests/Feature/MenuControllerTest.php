<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_list_assessible()
    {
        $response = $this->get('api/menu');

        $response->assertStatus(200);
    }

    public function test_can_get_menu_by_name()
    {
        $response = $this->get('api/menus/menu/our-menu');
        $response->assertStatus(200);
    }
}
