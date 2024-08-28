<?php

namespace App\Http\Controllers;

use App\Models\Model_has_Roles;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class Model_has_RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $model_has_roles = Model_has_Roles::all();
        return view('model_has_role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $models = User::all();
        return view('model_has_role.create',compact('roles','models'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       $validatedData = $request->validate([
            'role_id' => 'required',
            'model_type' => 'required|string',
            'model_id' => 'required',
        ]);

        $model_has_roles = new Model_has_Roles();
        $model_has_roles->role_id = $validatedData['role_id'];
        $model_has_roles->model_type = $validatedData['model_type'];
        $model_has_roles->model_id = $validatedData['model_id'];

        $model_has_roles->save();
        
        // Model_has_Roles::create($validatedData);

        return redirect()->route('model_has_roles.index')
                         ->with('status','Created Successfully');
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
