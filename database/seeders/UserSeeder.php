<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert(
            // Conditions for matching an existing record
            ['email' => 'dhermanda678@gmail.com'],
            // Data to insert or update
            [
                'name' => 'Hermanda Dharma',
                'email' => 'dhermanda678@gmail.com',
                'password' => Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
