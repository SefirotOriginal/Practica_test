<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas = Persona::all();

        $title = 'Borrar persona';
        $text = "¿Estas seguro que quieres eliminar este registro?";
        confirmDelete($title, $text);

        return view('layouts.persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Persona::create($request->all());
        return redirect()->route('persona.index')->withToastSuccess('Se ha creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
        return view('layouts.persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());
        return redirect()->route('persona.index')->withToastSuccess('Se ha editado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
        $persona->delete();
        return redirect()->route('persona.index');
    }
}
