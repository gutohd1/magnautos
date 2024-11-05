<?php

namespace Database\Seeders;

use App\Models\Gearbox;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GearboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Manual'],
            ['name' => 'Automatico'],
            ['name' => 'Automatizado'],
            ['name' => 'CVT'],
        ];
        Gearbox::insert($items);
    }
}
