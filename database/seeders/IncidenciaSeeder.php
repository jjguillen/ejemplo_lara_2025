<?php

namespace Database\Seeders;

use App\Models\Incidencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Incidencia::factory()->count(5000)->create();
    }
}
