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
        $levels = [
            ['name' => 'super admin'],
            ['name' => 'sales'],
            ['name' => 'sales manager'],
            ['name' => 'sales coordinator'],
        ];

        foreach ($levels as $level) {
            DB::table('level')->updateOrInsert(
                ['name' => $level['name']], // Check for existing record with the same name
                $level // Insert this record if it doesn't exist
            );
        }
    }
}
