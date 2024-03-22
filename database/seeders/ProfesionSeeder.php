<?php

namespace Database\Seeders;

use App\Models\Profesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $profesion = new Profesion();
        $profesion->nombre = 'Medico';
        $profesion->save();

        $profesion = new Profesion();
        $profesion->nombre = 'Obrero';
        $profesion->save();
        
        $profesion = new Profesion();
        $profesion->nombre = 'Programador';
        $profesion->save();
    }
}
