<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = 'capacitaciones';
    use HasFactory;

    protected $fillable = [
        'lugarcapatacion',
        'temacapacitacion',
        'capacitacionfecha_inicio',
        'capacitacionfecha_fin',
        'archivocapacitacion',
        'empleado_id'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
