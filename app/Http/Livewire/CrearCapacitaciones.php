<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use Livewire\WithFileUploads;

class CrearCapacitaciones extends Component
{
    public $lugarcapatacion;
    public $temacapacitacion;
    public $capacitacionfecha_inicio;
    public $capacitacionfecha_fin;
    public $archivocapacitacion;
    public $trabajadore;

    use WithFileUploads;

    protected $rules = [
        'lugarcapatacion' => 'required',
        'temacapacitacion' => 'required',
        'capacitacionfecha_inicio' => 'required',
        'capacitacionfecha_fin' => 'required'
    ];

    public function mount(Empleado $trabajadore)
    {
        $this->trabajadore = $trabajadore;
    }

    public function CrearCapacitacion()
    {
        $datos = $this->validate();

        //Almacenar Convocatoria en el disco duro
        $archivocapacitacion = $this->archivocapacitacion->store('public/archivocapacitacion');
        $datos['archivocapacitacion'] = str_replace('public/archivocapacitacion/', '', $archivocapacitacion);

        //Insertamos el estudio
        $this->trabajadore->capacitacion()->create([
            'lugarcapatacion' => $datos['lugarcapatacion'],
            'temacapacitacion' => $datos['temacapacitacion'],
            'capacitacionfecha_inicio' => $datos['capacitacionfecha_inicio'],
            'capacitacionfecha_fin' => $datos['capacitacionfecha_fin'],
            'archivocapacitacion' => $datos['archivocapacitacion']
        ]);

        //Crear notificaciones y enviar el email
        session()->flash('mensaje', 'Se agrego correctamente la capacitacion');

        //Mostrar al usuario un mensaje de ok
        return redirect()->route('capacitaciones.index', $this->trabajadore->id);

    }

    public function render()
    {
        return view('livewire.crear-capacitaciones');
    }
}
