<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;

class MostrarPersonal extends Component
{
    public $termino;
    public $oficina;
    public $regimen;

    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($termino, $oficina, $regimen){
        $this->termino = $termino;
        $this->oficina = $oficina;
        $this->regimen = $regimen;
    }

    // public function eliminarVacante(Empleado $empleado)
    // {
    //     $empleado->delete();
    // }

    public function render()
    {
        $empleados = Empleado::when($this->termino, function($query){
            $query->where('apellidos', 'LIKE', "%" . $this->termino . "%");
        })
        ->when($this->oficina, function($query){
            $query->where('oficina_id', $this->oficina);
        })
        ->when($this->regimen, function($query){
            $query->where('regimen', $this->regimen);
        })
        ->orderBy('id','DESC')->paginate(50);

        return view('livewire.mostrar-personal', [
            'empleados' => $empleados
        ]);
    }
}
