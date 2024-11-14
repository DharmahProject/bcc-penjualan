<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level')->insertOrIgnore([
            ['id' => 1, 'name' => 'super admin'],
            ['id' => 2, 'name' => 'sales'],
            ['id' => 3, 'name' => 'sales manager'],
            ['id' => 4, 'name' => 'sales coordinator'],
        ]);
    }
}
