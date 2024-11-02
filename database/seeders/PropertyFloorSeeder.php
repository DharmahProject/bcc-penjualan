<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyFloor;

class PropertyFloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyFloor::create(['name' => '1 Lantai']);
        PropertyFloor::create(['name' => '2 Lantai']);
        PropertyFloor::create(['name' => '3 Lantai']); 
    }
}
