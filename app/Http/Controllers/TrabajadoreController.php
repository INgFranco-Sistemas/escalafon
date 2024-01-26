<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class TrabajadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('trabajadores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trabajadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('auth.forgot-password');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $trabajadore)
    {
        // $empleado = Empleado::all();
        return view('trabajadores.show', [
            'trabajadore' => $trabajadore
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $trabajadore)
    {

        return view('trabajadores.edit', [
            'trabajadore' => $trabajadore
        ]);
    }
}
