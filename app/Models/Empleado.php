<?php

namespace App\Models;

use App\Models\Estudio;
use App\Models\Oficina;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'dni',
        'ruc',
        'sexo',
        'nacimiento',
        'vinculo',
        'celular',
        'nacionalidad',
        'departamento',
        'provincia',
        'distrito',
        'estadocivil',
        'correo',
        'correoinst',
        'cargocontrato',
        'cargoactual',
        'direccion',
        'regimen',
        'oficina_id'
    ];

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }

    public function estudio()
    {
        return $this->hasMany(Estudio::class);
    }

    public function experiencia()
    {
        return $this->hasMany(Experiencia::class);
    }

    public function capacitacion()
    {
        return $this->hasMany(Capacitacion::class);
    }
}


