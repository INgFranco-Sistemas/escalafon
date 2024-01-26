<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Empleado $trabajadore)
    {
        // $empleado = Empleado::all();
        return view('estudios.index', [
            'trabajadore' => $trabajadore
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Empleado $trabajadore)
    {
        return view('estudios.create', [
            'trabajadore' => $trabajadore
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
