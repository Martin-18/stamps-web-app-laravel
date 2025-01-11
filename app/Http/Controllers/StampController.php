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
        $stamps = Stamp::all();
        return view('dashboard', ['stamps' => $stamps]);
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
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

        $color = "blue";
        return redirect()->route('stamps.index')->with(['success' => 'El sello ha sido subido correctamente.','color' => $color]);
    }*/

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Crear el modelo y asignar un valor temporal al campo 'image'
        $stamp = new Stamp($request->only(['name', 'price', 'description']));
        $stamp->image = 'placeholder.png'; // Valor temporal
        $stamp->save();
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = storage_path('app/public/images/stamps/' . $stamp->id);
    
            if (!file_exists($storagePath)) {
                mkdir($storagePath, 0755, true);
            }

            /*$width = $image->width();
            $height = $image->height();

            // Escalar la imagen según la orientación
            if ($width > $height) {
                // Imagen horizontal: ajustar ancho a 300px
                $image->scale(width: 350);
            } else {
                // Imagen vertical o cuadrada: ajustar alto a 300px
                $image->scale(height: 350);
            }*/
    
            $filename = $stamp->id . '.' . $image->getClientOriginalExtension();
            $image->move($storagePath, $filename);
    
            $imagePath = 'storage/images/stamps/' . $stamp->id . '/' . $filename;
            $stamp->image = $imagePath;
            $stamp->save();
        }
    
        $color = "blue";
        return redirect()->route('stamps.index')->with(['success' => 'El sello ha sido subido correctamente.', 'color' => $color]);
    }

    /*public function store(Request $request)
    {
        $request->merge([
            'delivery' => $request->has('delivery') ? 1 : 0,
            'active' => $request->has('active') ? 1 : 1,
            'plan_id' => 2,
        ]);
        
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'city_id' => 'required|exists:cities,id',
            'type_id' => 'required|exists:types,id',
            'category_id' => 'required|exists:categories,id',
            'plan_id' => 'required|exists:plans,id',
            'schedule_id' => 'required|exists:schedules,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'images' => 'nullable|array',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:65535',
            'delivery' => 'required|boolean',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'baths' => 'nullable|integer|min:0',
            'rooms' => 'nullable|integer|min:0',
            'area' => 'nullable|integer|min:0',
            'price' => 'nullable|integer|min:0',
            'active' => 'required|boolean',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($request->title);
        $validated['subcategory_id'] = 1;
        $validated['published'] = now()->toDateString();
        
        $post = new Post($validated);
        
        $post->save();
         
        $manager = new ImageManager(Driver::class);
        
        $storagePath = storage_path('app/public/images/posts/' . $post->slug);

        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0755, true);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $img = $manager->read($image->getRealPath()); 

                //$img->scale(height: 300) 
                //    ->toJpeg(quality: 75); 

                $width = $img->width();
                $height = $img->height();

                // Escalar la imagen según la orientación
                if ($width > $height) {
                    // Imagen horizontal: ajustar ancho a 300px
                    $img->scale(width: 350);
                } else {
                    // Imagen vertical o cuadrada: ajustar alto a 300px
                    $img->scale(height: 350);
                }

                // Convertir a JPEG con calidad 75
                $img->toJpeg(quality: 75);
                
                $filename = $index . '.jpeg';
                $img->save($storagePath . '/' . $filename);

                $imagePath = 'images/posts/' . $post->slug . '/' . $filename;
                $post->images()->create([
                    'url' => $imagePath,
                ]);
            }
        }
    
        //return redirect()->route('activar');
        return redirect()->route('/');
    }*/
    
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
