<?php

namespace Database\Seeders;

use App\Models\Vehicles;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('pt_BR');
        $items = [
            [
                'make_id' => 1,
                'model' => 'C4 1.6 LOUNGE EXCLUSIVE THP',
                'reg' => 'fxxxx12',
                'type' => 1,
                'year' => 2014,
                'year_model' => 2015,
                'odometer' => 72000,
                'fuel_id' => 4,
                'engine' => 1600,
                'power' => 160,
                'gearbox_id' => 2,
                'seats' => 5,
                'doors' =>4,
                'colour' => 'Branca',
                'description' => $faker->realText,
                'price' => 57900.00,
                'featured' => 0
            ],
            [
                'make_id' => 2,
                'model' => 'CRUZE 1.8 LT 16V',
                'reg' => 'fxxxx03',
                'type' => 1,
                'year' => 2014,
                'year_model' => 2014,
                'odometer' => 70000,
                'fuel_id' => 4,
                'engine' => 1800,
                'power' => 140,
                'gearbox_id' => 2,
                'seats' => 5,
                'doors' =>4,
                'colour' => 'Azul',
                'description' => $faker->realText,
                'price' => 55900.00,
                'featured' => 0
            ],
        ];
        Vehicles::insert($items);
    }
}
