<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientTest extends TestCase
{public function testCreateBooking()
{
    $response = $this->post('/client/create', [
        'name' => 'Name',
        'email' => 'email@email.com'
    ]);

    $response->assertStatus(200);
}
}
