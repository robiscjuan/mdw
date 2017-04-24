<?php

namespace Tests\Feature;

use DateTime;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookingTest extends TestCase
{
    public function testCreateBookingOK()
    {
        $response = $this->post('/booking/create', [
            'name' => 'Name',
            'email' => 'email@email.com',
            'day' => '2009-03-04',
            'start_hour' => '17:45',
            'finish_hour' => '18:45'
        ]);

        $response->assertStatus(200);
    }

    public function testCreateBookingKO()
    {
        $response = $this->post('/booking/create', [
            'name' => 'Name',
            'email' => 'email@email.com',
        ]);

        $response->assertStatus(400);
    }

    public function testCreateBookingWithoutDataKO()
    {
        $response = $this->post('/booking/create');

        $response->assertStatus(400);
    }
}
