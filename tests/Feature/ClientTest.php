<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientTest extends TestCase
{
    public function testCreateBookingOK()
    {
        $response = $this->post('/client/create', [
            'name' => 'Name',
            'email' => 'email@email.com'
        ]);

        $response->assertStatus(200);
    }

    public function testCreateBookingKO()
    {
        $response = $this->post('/client/create', [
            'name' => 'Name'
        ]);

        $response->assertStatus(400);
    }

    public function testCreateBookingWithoutDataKO()
    {
        $response = $this->post('/client/create');

        $response->assertStatus(400);
    }
}
