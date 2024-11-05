<?php

namespace Database\Seeders;

use App\Models\Make;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Chevrolet'],
            ['name' => 'Citroen'],
            ['name' => 'Fiat'],
            ['name' => 'Honda'],
            ['name' => 'Hyundai'],
            ['name' => 'Jeep'],
            ['name' => 'Mitsubishi'],
            ['name' => 'Nissan'],
            ['name' => 'Renault'],
            ['name' => 'Volkswagen'],
        ];
        Make::insert($items);
    }
}
