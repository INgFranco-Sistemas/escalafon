<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarEmpleado extends Component
{
    public $trabajadore;

    public function render()
    {
        return view('livewire.mostrar-empleado');
    }
}
