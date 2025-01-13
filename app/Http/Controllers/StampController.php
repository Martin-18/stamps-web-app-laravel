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
        $stamps = Stamp::paginate(15);

        return view('dashboard', ['stamps' => $stamps]);
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
            //$path = $request->file('image')->storeAs('public/img', $name);
            $request->file('image')->storeAs('public/img', $name);
            $stamp->image = 'storage/img/' . $name; 
            $stamp->save();
        }

        $color = "blue";
        return redirect()->route('stamps.index')->with(['success' => 'El sello ha sido subido correctamente.','color' => $color]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stamp $stamp)
    {
        return view('dashboard.edit', compact('stamp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stamp $stamp)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $stamp->update($request->except('image'));

        if ($request->hasFile('image')) {
            $name = $stamp->id . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('public/img', $name);
            $stamp->image = 'storage/img/' . $name;
            $stamp->save();
        }

        $color = "green";
        //return redirect()->route('stamps.index')->with('success', 'El sello ha sido actualizado correctamente.', $color);
        return redirect()->route('stamps.index')->with(['success' => 'El sello ha sido actualizado correctamente.','color' => $color]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stamp $stamp)
    {
        $stamp->delete();
        $color = "red";
        //return redirect()->route('stamps.index')->with('success', 'El sello ha sido eliminado correctamente.', $color);
        return redirect()->route('stamps.index')->with(['success' => 'El sello ha sido eliminado correctamente.','color' => $color]);
    }
}
