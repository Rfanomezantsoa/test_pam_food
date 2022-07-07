<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeadlineheroControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_isListHeadlineheros()
    {
        $response = $this->get('api/headlineheros/');

        $response->assertOk();

    }
    public function test_isHeadlineheroByName()
    {
        $response = $this->get('api/headlineheros/page/home');

        $response->assertOk();
    }
}
