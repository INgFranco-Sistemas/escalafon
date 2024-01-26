<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'lugartrabajo',
        'cargotrabajo',
        'cargofecha_inicio',
        'cargofecha_fin',
        'archivoexperiencia',
        'empleado_id'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
