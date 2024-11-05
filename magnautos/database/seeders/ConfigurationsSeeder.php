<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('pt_BR');
        $items = [
            ['type_id' => 1, 'name' => 'phone', 'value' => '5131104174'],
            ['type_id' => 2, 'name' => 'mobile', 'value' => '51995614618'],
            ['type_id' => 3, 'name' => 'email', 'value' => 'contato@magnauto.com.br'],
            ['type_id' => 4, 'name' => 'endereco', 'value' => 'AV: ASSIS BRASIL, 5240 PORTO ALEGRE-RS'],

            ['type_id' => 6, 'name' => 'instagram', 'value' => 'http://instagram.com/magnautosmultimarcas'],
            ['type_id' => 7, 'name' => 'facebook', 'value' => 'http://facebook.com/magnautosmultimarcas'],
            ['type_id' => 8, 'name' => 'footer_message', 'value' => $faker->realText],
            ['type_id' => 9, 'name' => 'copright_message', 'value' => 'Copyright © 2024 Magnautos Multimarcas'],
            ['type_id' => 10, 'name' => 'terms', 'value' => $faker->realText],
            ['type_id' => 11, 'name' => 'faq', 'value' => $faker->realText],
            ['type_id' => 12, 'name' => 'about', 'value' => $faker->realText],
            ['type_id' => 13, 'name' => 'about-image', 'value' => 'about-1-720x480.jpg'],
            ['type_id' => 14, 'name' => 'team-header', 'value' => $faker->realText],
            ['type_id' => 15, 'name' => 'team-data', 'value' => '{}'],
            ['type_id' => 16, 'name' => 'logo', 'value' => 'magnautos-multimarcas-logo.jpg'],
            ['type_id' => 17, 'name' => 'footer-logo', 'value' => 'magnautos-multimarcas-footer-logo.png'],
        ];
        Configuration::insert($items);
    }
}
