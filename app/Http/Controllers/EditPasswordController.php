<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('password.editpassword.index');
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
    public function store(Request $request)
    {
        //validation
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:4',
        ]);

        // Check if current password matches
    if (!Hash::check($request->current_password, auth()->user()->password)) {
        return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }

        $editpassword = User::find(auth()->id());
        $editpassword->password = Hash::make($request->password);
        $editpassword->save();

        return redirect()->back()->with('success', 'Password Update Successfully!');
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
