<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => '$2y$10$6FgYk0D5hAxIfoMrJizZI.ETLvscJ4rGzYygmSteO.dMm0alI2nsy',
        ]);
    }
}
