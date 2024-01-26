<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use App\Models\Oficina;
use Livewire\Component;

class EditarVacante extends Component
{
    public $trabajadore_id;
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
        'correo' => 'required',
        'regimen' => 'required',
        'oficina' => 'required'
    ];

    public function mount(Empleado $trabajadore){
        $this->trabajadore_id = $trabajadore->id;
        $this->nombres = $trabajadore->nombres;
        $this->apellidos = $trabajadore->apellidos;
        $this->dni = $trabajadore->dni;
        $this->ruc = $trabajadore->ruc;
        $this->sexo = $trabajadore->sexo;
        $this->nacimiento = $trabajadore->nacimiento;
        $this->fijo = $trabajadore->fijo;
        $this->celular = $trabajadore->celular;
        $this->nacionalidad = $trabajadore->nacionalidad;
        $this->departamento = $trabajadore->departamento;
        $this->provincia = $trabajadore->provincia;
        $this->distrito = $trabajadore->distrito;
        $this->estadocivil = $trabajadore->estadocivil;
        $this->direccion = $trabajadore->direccion;
        $this->correo = $trabajadore->correo;
        $this->regimen = $trabajadore->regimen;
        $this->oficina = $trabajadore->oficina_id;
    }

    public function editarTrabajador(){
        $datos = $this->validate();

        //encontrar el gtrabajador a editar
        $trabajadore = Empleado::find($this->trabajadore_id);

        //asignar los valores
        $trabajadore->nombres = $datos['nombres'];
        $trabajadore->apellidos = $datos['apellidos'];
        $trabajadore->dni = $datos['dni'];
        $trabajadore->ruc = $datos['ruc'];
        $trabajadore->sexo = $datos['sexo'];
        $trabajadore->nacimiento = $datos['nacimiento'];
        $trabajadore->fijo = $datos['fijo'];
        $trabajadore->celular = $datos['celular'];
        $trabajadore->nacionalidad = $datos['nacionalidad'];
        $trabajadore->departamento = $datos['departamento'];
        $trabajadore->provincia = $datos['provincia'];
        $trabajadore->distrito = $datos['distrito'];
        $trabajadore->estadocivil = $datos['estadocivil'];
        $trabajadore->direccion = $datos['direccion'];
        $trabajadore->correo = $datos['correo'];
        $trabajadore->regimen = $datos['regimen'];
        $trabajadore->oficina_id = $datos['oficina'];

        //guardar el trabajador
        $trabajadore->save();

        //redireccionar
        session()->flash('mensaje', 'Datos del Personal Actualizados');
        return redirect()->route('trabajadores.index');
    }

    public function render()
    {
        //Mostrar las oficinas
        $oficinas = Oficina::all();

        return view('livewire.editar-vacante', [
            'oficinas' => $oficinas
        ]);
    }
}
