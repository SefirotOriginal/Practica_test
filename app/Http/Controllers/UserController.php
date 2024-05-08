<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\StoreUserReques;
use App\Http\Requests\UpdateUserReques;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(User $user)
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
        $roles = Role::all()->pluck('name', 'id');
        return view('layouts.usuario.UserCreate', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserReques $request)
    {
        //
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('user.index')->withToastSuccess('Se ha creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all()->pluck('name', 'id');

        $user->load('roles');
        return view('layouts.usuario.EditUser', compact('roles', 'user'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserReques $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('user.index')->withToastSuccess('Se ha editado exitosamente!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('user.index');
    }
}
