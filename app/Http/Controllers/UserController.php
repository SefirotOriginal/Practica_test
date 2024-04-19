<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\StoreUserReques;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('layouts.usuario.IndexUser', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::all(); 
        return view('layouts.usuario.UserCreate', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserReques $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'rol' => 'required|exists:roles,id', // Asegura que el rol seleccionado exista en la base de datos
        ]);
    
        // Crea un nuevo usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        // Asigna el rol seleccionado al usuario
        $rolId = $validatedData['rol'];
        $rol = Role::findOrFail($rolId);
        $user->roles()->attach($rol);
            
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $profesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profesion)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
