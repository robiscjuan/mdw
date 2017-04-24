<?php

namespace Tests\Feature;

use DateTime;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookingTest extends TestCase
{
    public function testCreateBooking()
    {
        $response = $this->post('/booking/create', [
            'name' => 'Name',
            'email' => 'email@email.com',
            'start_hour' => new DateTime('NOW'),
            'finish_hour' => (new DateTime('NOW'))->add(new \DateInterval('PT1H'))
        ]);

        $response->assertStatus(200);
    }
}
