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
        return view('layouts.persona.work', compact('profesions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesionRequest $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesionRequest $request, Profesion $profesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesion $profesion)
    {
        //
    }
}
