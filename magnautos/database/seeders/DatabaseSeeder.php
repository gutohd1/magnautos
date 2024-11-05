<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FuelSeeder::class,
            GearboxSeeder::class,
            MakeSeeder::class,
            VehicleSeeder::class,
            ConfigurationTypeSeeder::class,
            ConfigurationsSeeder::class,
        ]);
    }
}
