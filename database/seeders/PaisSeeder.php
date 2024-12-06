<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paises = [
            ['nombre' => 'Guatemala'],
            ['nombre' => 'Argentina'],
            ['nombre' => 'Bolivia'],
            ['nombre' => 'Brasil'],
            ['nombre' => 'Chile'],
            ['nombre' => 'Colombia'],
            ['nombre' => 'Ecuador'],
            ['nombre' => 'Guyana'],
            ['nombre' => 'Paraguay'],
            ['nombre' => 'Perú'],
            ['nombre' => 'Surinam'],
            ['nombre' => 'Uruguay'],
            ['nombre' => 'Venezuela']
        ];

        foreach ($paises as $pais) {
            \App\Models\Pais::create($pais);
        }
    }
}
