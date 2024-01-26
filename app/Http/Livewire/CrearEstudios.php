<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use App\Models\Estudio;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearEstudios extends Component
{
    public $centroestudios;
    public $tipoestudio;
    public $fecha_inicio;
    public $fecha_fin;
    public $archivoestudio;
    public $trabajadore;

    use WithFileUploads;

    protected $rules = [
        'centroestudios' => 'required',
        'tipoestudio' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required'
    ];

    public function mount(Empleado $trabajadore)
    {
        $this->trabajadore = $trabajadore;
    }

    public function CrearEstudios()
    {
        $datos = $this->validate();

        //Almacenar Convocatoria en el disco duro
        $archivoestudio = $this->archivoestudio->store('public/archivoestudio');
        $datos['archivoestudio'] = str_replace('public/archivoestudio/', '', $archivoestudio);

        //Insertamos el estudio
        $this->trabajadore->estudio()->create([
            'centroestudios' => $datos['centroestudios'],
            'tipoestudios' => $datos['tipoestudio'],
            'fecha_inicio' => $datos['fecha_inicio'],
            'fecha_fin' => $datos['fecha_fin'],
            'archivoestudios' => $datos['archivoestudio']
        ]);

        //Crear notificaciones y enviar el email
        session()->flash('mensaje', 'Se agrego correctamente el estudio');

        //Mostrar al usuario un mensaje de ok
        return redirect()->route('estudios.index', $this->trabajadore->id);

    }

    public function render()
    {
        //Mostrar las oficinas
        $estudios = Estudio::all();

        return view('livewire.crear-estudios', [
            'estudios' => $estudios
        ]);
    }
}
