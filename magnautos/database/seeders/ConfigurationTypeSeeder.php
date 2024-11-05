<?php

namespace Database\Seeders;

use App\Models\ConfigurationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigurationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Telefone'],
            ['name' => 'Celular'],
            ['name' => 'Email'],
            ['name' => 'Endereco'],
            ['name' => 'Whatsapp'],
            ['name' => 'Instagram'],
            ['name' => 'Facebook'],
            ['name' => 'Mensagem de rodape'],
            ['name' => 'Mensagem de marca registrada'],
            ['name' => 'Termos'],
            ['name' => 'FAQ'],
            ['name' => 'Sobre Nos'],
            ['name' => 'Sobre nos Imagem'],
            ['name' => 'Equipe texto'],
            ['name' => 'Equipe dados'],
            ['name' => 'Logo'],
            ['name' => 'Logo rodape'],
        ];
        ConfigurationType::insert($items);
    }
}
