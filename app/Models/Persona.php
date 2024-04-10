<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 
        'apellido', 
        'fecha_nacimiento',
        'genero', 
        'profesion_id'
    ];
    public function profesion(){
        return $this->belongsTo(Profesion::class);
    }
}
