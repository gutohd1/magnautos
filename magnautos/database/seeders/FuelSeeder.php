<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Gasolina'],
            ['name' => 'Alcool'],
            ['name' => 'Diesel'],
            ['name' => 'Flex'],
            ['name' => 'GNV'],
            ['name' => 'Hibrido'],
            ['name' => 'Eletrico']
        ];
        Fuel::insert($items);
    }
}
