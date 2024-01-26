<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use App\Models\Oficina;
use Livewire\Component;

class FiltrarTrabajadores extends Component
{
    public $termino;
    public $oficina;
    public $regimen;

    public function leerDatosFormulario()
    {
        $this->emit('terminosBusqueda', $this->termino, $this->oficina, $this->regimen);
    }

    public function render()
    {
        $oficinas = Oficina::all();
        return view('livewire.filtrar-trabajadores', [
            'oficinas' => $oficinas
        ]);
    }
}
