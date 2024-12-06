<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos_guatemala =  [
            [
                'nombre' => 'Guatemala',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Baja Verapaz',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Alta Verapaz',
                'pais_id' => 1
            ],
            [
                'nombre' => 'El Progreso',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Izabal',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Zacapa',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Chiquimula',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Santa Rosa',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Jalapa',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Jutiapa',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Sacatepéquez',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Chimaltenango',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Escuintla',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Sololá',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Totonicapán',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Quetzaltenango',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Suchitepéquez',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Retalhuleu',
                'pais_id' => 1
            ],
            [
                'nombre' => 'San Marcos',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Huehuetenango',
                'pais_id' => 1
            ],
            [
                'nombre' => 'Quiché',
                'pais_id' => 1
            ]
        ];

        foreach ($departamentos_guatemala as $departamento) {
            \App\Models\Departamento::create($departamento);
        }
    }
}
