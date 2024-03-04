<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::Create([
            'name' => 'Vexana',
            'poster' => '1688126292.webp',
            'weapon' => "Duke Atticus' Scepter",
            'role_id' => 2,
            'special_id' => 1,
            'difficult_id' => 2,
            'description' => 'hero mage',
        ]);
        Hero::Create([
            'name' => 'Lancelot',
            'poster' => '1688126038.webp',
            'weapon' => 'Sword',
            'role_id' => 1,
            'special_id' => 1,
            'difficult_id' => 2,
            'description' => 'hero assasin',
        ]);
        Hero::Create([
            'name' => 'Lesley',
            'poster' => '1688198282.webp',
            'weapon' => 'Black Vulture',
            'role_id' => 3,
            'special_id' => 1,
            'difficult_id' => 2,
            'description' => 'hero marksman',
        ]);
    }
}
