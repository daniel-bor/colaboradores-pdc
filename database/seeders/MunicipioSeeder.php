<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios_departamento_guatemala = [
            [
                'nombre' => 'Guatemala',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Santa Catarina Pinula',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'San José Pinula',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'San José del Golfo',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Palencia',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Chinautla',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'San Pedro Ayampuc',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Mixco',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'San Pedro Sacatepéquez',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'San Juan Sacatepéquez',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'San Raymundo',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Chuarrancho',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Fraijanes',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Amatitlán',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Villa Nueva',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Villa Canales',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'Petapa',
                'departamento_id' => 1
            ]
        ];

        foreach ($municipios_departamento_guatemala as $municipio) {
            \App\Models\Municipio::create($municipio);
        }
    }
}
