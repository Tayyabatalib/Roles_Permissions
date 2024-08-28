<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|unique:users,password',
        ]);

        User::create($validatedData);

        return redirect()->route('users.index')
                         ->with('status','User Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user =  User::find($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|unique:users,password',
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index')
                         ->with('status','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')
                         ->with('status','User Deleted Successfully');
    }
}
