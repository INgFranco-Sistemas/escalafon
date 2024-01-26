<?php

namespace App\Models;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estudio extends Model
{
    use HasFactory;

    protected $fillable = [
        'centroestudios',
        'tipoestudios',
        'fecha_inicio',
        'fecha_fin',
        'archivoestudios',
        'empleado_id'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
