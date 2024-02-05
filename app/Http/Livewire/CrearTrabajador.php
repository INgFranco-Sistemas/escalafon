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
    public $fechavinculo;
    public $celular;
    public $nacionalidad;
    public $departamento;
    public $provincia;
    public $distrito;
    public $estadocivil;
    public $correo;
    public $correoinst;
    public $cargocontrato;
    public $cargoactual;
    public $direccion;
    public $regimen;
    public $oficina;

    protected $rules = [
        'nombres' => 'required|string',
        'apellidos' => 'required',
        'dni' => 'required|numeric|min:8',
        'ruc' => 'numeric|required|min:11',
        'sexo' => 'required',
        'nacimiento' => 'required|date',
        'celular' => 'required|min:9',
        'nacionalidad' => 'required',
        'fechavinculo' => 'required',
        'departamento' => 'required',
        'provincia' => 'required',
        'distrito' => 'required',
        'estadocivil' => 'required',
        'correo' => 'required|email',
        'correoinst' => 'required|email',
        'cargocontrato' => 'required',
        'cargoactual' => 'required',
        'direccion' => 'required',
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
            'vinculo' => $datos['fechavinculo'],
            'celular' => $datos['celular'],
            'nacionalidad' => $datos['nacionalidad'],
            'departamento' => $datos['departamento'],
            'provincia' => $datos['provincia'],
            'distrito' => $datos['distrito'],
            'estadocivil' => $datos['estadocivil'],
            'correo' => $datos['correo'],
            'correoinst' => $datos['correoinst'],
            'cargocontrato' => $datos['cargocontrato'],
            'cargoactual' => $datos['cargoactual'],
            'direccion' => $datos['direccion'],
            'regimen' =>$datos['regimen'],
            'oficina_id' =>$datos['oficina'],
        ]);

        //CREAREMOS EL MENSAJE
        session()->flash('mensaje', 'Fue Registrado Correctamente');

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
