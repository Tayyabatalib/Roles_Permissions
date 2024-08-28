<?php

namespace App\Http\Controllers;

use App\Models\Model_has_Permissions;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class Model_has_PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('model_has_permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = User::all();
        $permissions = Permission::all();
        return view('model_has_permissions.create',compact('models','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //dd($request);
         $validatedData = $request->validate([
             'model_type' => 'nullable',
             'model_id' => 'nullable',
             'permission_id' => 'nullable',
         ]);

         //dd($validatedData);
         Model_has_Permissions::create($validatedData);

         return redirect()->route('model_has_permissions.index')
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
