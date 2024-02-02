<?php

namespace App\Http\Livewire;

use App\Models\Oficina;
use Livewire\Component;
use App\Models\Empleado;

class CrearTrabajador extends Component
{
    public $nombres;
    public $apellidos;
    public $dni;
    public $ruc;
    public $sexo;
    public $nacimiento;
    public $fijo;
    public $celular;
    public $nacionalidad;
    public $departamento;
    public $provincia;
    public $distrito;
    public $estadocivil;
    public $direccion;
    public $correo;
    public $regimen;
    public $oficina;

    protected $rules = [
        'nombres' => 'required|string',
        'apellidos' => 'required',
        'dni' => 'required|numeric|min:8',
        'ruc' => 'numeric|required|min:11',
        'sexo' => 'required',
        'nacimiento' => 'required|date',
        'fijo' => 'required|min:9',
        'celular' => 'required|min:9',
        'nacionalidad' => 'required',
        'departamento' => 'required',
        'provincia' => 'required',
        'distrito' => 'required',
        'estadocivil' => 'required',
        'direccion' => 'required',
        'correo' => 'required|email',
        'regimen' => 'required',
        'oficina' => 'required'
    ];

    public function crearTrabajador(){
        $datos = $this->validate();

        //CREAREMOS EL EMPLEADO
        Empleado::create([
            'nombres' => $datos['nombres'],
            'apellidos' => $datos['apellidos'],
            'dni' => $datos['dni'],
            'ruc' => $datos['ruc'],
            'sexo' => $datos['sexo'],
            'nacimiento' => $datos['nacimiento'],
            'fijo' => $datos['fijo'],
            'celular' => $datos['celular'],
            'nacionalidad' => $datos['nacionalidad'],
            'departamento' => $datos['departamento'],
            'provincia' => $datos['provincia'],
            'distrito' => $datos['distrito'],
            'estadocivil' => $datos['estadocivil'],
            'direccion' => $datos['direccion'],
            'correo' =>$datos['correo'],
            'regimen' =>$datos['regimen'],
            'oficina_id' =>$datos['oficina'],
        ]);

        //CREAREMOS EL MENSAJE
        session()->flash('mensaje', 'Fue Registrado el Personal');

        //REDIRECCIONAMOS
        return redirect()->route('trabajadores.index');
    }

    public function render()
    {
        //Mostrar las oficinas
        $oficinas = Oficina::all();

        return view('livewire.crear-trabajador', [
            'oficinas' => $oficinas
        ]);
    }
}
