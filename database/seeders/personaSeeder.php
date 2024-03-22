<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->apellido = 'Perez';
        $persona->fecha_nacimiento = '1990-01-01';
        $persona->genero = 'M';
        $persona->profesion_id = '1';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Maria';
        $persona->apellido = 'Lopez';
        $persona->fecha_nacimiento = '1995-01-01';
        $persona->genero = 'F';
        $persona->profesion_id = '1';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Coral';
        $persona->apellido = 'Cordova';
        $persona->fecha_nacimiento = '2001-11-25';
        $persona->genero = 'F';
        $persona->profesion_id = '1';
        $persona->save();

    }
}
