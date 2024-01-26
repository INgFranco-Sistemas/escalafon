<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use Livewire\WithFileUploads;

class CrearExperiencias extends Component
{
    public $lugartrabajo;
    public $cargotrabajo;
    public $cargofecha_inicio;
    public $cargofecha_fin;
    public $archivoexperiencia;
    public $trabajadore;

    use WithFileUploads;

    protected $rules = [
        'lugartrabajo' => 'required',
        'cargotrabajo' => 'required',
        'cargofecha_inicio' => 'required',
        'cargofecha_fin' => 'required'
    ];

    public function mount(Empleado $trabajadore)
    {
        $this->trabajadore = $trabajadore;
    }

    public function CrearExperiencia()
    {
        $datos = $this->validate();

        //Almacenar Convocatoria en el disco duro
        $archivoexperiencia = $this->archivoexperiencia->store('public/archivoexperiencia');
        $datos['archivoexperiencia'] = str_replace('public/archivoexperiencia/', '', $archivoexperiencia);

        //Insertamos el estudio
        $this->trabajadore->experiencia()->create([
            'lugartrabajo' => $datos['lugartrabajo'],
            'cargotrabajo' => $datos['cargotrabajo'],
            'cargofecha_inicio' => $datos['cargofecha_inicio'],
            'cargofecha_fin' => $datos['cargofecha_fin'],
            'archivoexperiencia' => $datos['archivoexperiencia']
        ]);

        //Crear notificaciones y enviar el email
        session()->flash('mensaje', 'Se agrego correctamente la experiencia');

        //Mostrar al usuario un mensaje de ok
        return redirect()->route('experiencias.index', $this->trabajadore->id);

    }

    public function render()
    {
        return view('livewire.crear-experiencias');
    }
}
