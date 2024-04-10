<?php

namespace App\Http\Controllers;

use App\Models\Profesion;
use App\Http\Requests\StoreProfesionRequest;
use App\Http\Requests\UpdateProfesionRequest;

class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profesions = Profesion::all();
        
        $title = 'Borrar persona';
        $text = "¿Estas seguro que quieres eliminar este registro?";
        confirmDelete($title, $text);
        
        return view('layouts.persona.work', compact('profesions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.persona.createProfesion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesionRequest $request)
    {
        //
        Profesion::create($request->all());
        return redirect()->route('profesion.index')->withToastSuccess('Se ha creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesion $profesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesion $profesion)
    {
        //
        return view('layouts.persona.ProfesionEdit', compact('profesion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesionRequest $request, Profesion $profesion)
    {
        //
        $profesion->update($request->all());
        return redirect()->route('profesion.index')->withToastSuccess('Se ha editado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesion $profesion)
    {
        //
        $profesion->delete();
        return redirect()->route('profesion.index');
    }
}
