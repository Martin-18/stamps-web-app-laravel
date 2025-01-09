<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;

class StampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);
        
        $stamp = Stamp::create($request->all());
    
        if ($request->hasFile('image')) {
            $name = $stamp->id . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('public/img', $name);
            $stamp->image = 'storage/img/' . $name; 
            $stamp->save();
        }
    
        return redirect()->route('home')->with('success', 'El sello ha sido subido correctamente.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rc $rc)
    {
        //
    }
}
