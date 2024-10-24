<?php

namespace App\Http\Controllers;

use App\Models\Bear;
use Illuminate\Http\Request;

class BearController extends Controller
{
    // Toont de lijst van beren
    public function index()
    {
        $bears = Bear::all(); 
        return view('welcome', compact('bears')); 
    }

    public function show($id)
    {
        $bear = Bear::findOrFail($id);
        return view('show', compact('bear'));
    }

    // Toont het formulier om een nieuwe beer toe te voegen
    public function create()
    {
        return view('create'); // Zorg ervoor dat je de create.blade.php hebt
    }

    // Slaat de nieuwe beer op
    public function store(Request $request)
    {
        $request->validate([
            'bear_name' => 'required',
            'origin_name' => 'required',
            'fact_name' => 'required',
            'image_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Maak een nieuwe beer aan
        $bear = new Bear();
        $bear->name = $request->input('bear_name');
        $bear->origin = $request->input('origin_name');
        $bear->fact = $request->input('fact_name'); 
    
        // Afbeelding opslaan
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();  
            $request->image->move(public_path('images'), $imageName); // Verplaats afbeelding naar de publieke map
            $bear->image = 'images/' . $imageName; // Opslaan van het pad
        }
    
        $bear->save();
    
        // Redirect na succesvolle creatie
        return redirect()->route('bears.index')->with('success', 'Bear created successfully!');
    }
    

    // Toont het bewerkingsformulier voor een specifieke beer
    public function edit($id)
    {
        $bear = Bear::findOrFail($id);
        return view('edit', compact('bear'));
    }


    // Update de beer in de database
    public function update(Request $request, $id)
{
    $request->validate([
        'bear_name' => 'required|string|max:255',
        'origin_name' => 'required|string|max:255',
        'fact_name' => 'required|string|max:255', // Validatie voor fact_name
        'image_name' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validatie voor image_name, niet verplicht
    ]);

    $bear = Bear::findOrFail($id);
    $bear->name = $request->input('bear_name');
    $bear->origin = $request->input('origin_name');
    $bear->fact = $request->input('fact_name'); // Update fact_name

    // Afbeelding updaten als er een nieuwe afbeelding is geüpload
    if ($request->hasFile('image_name')) { // Controleer of er een nieuwe afbeelding is
        $imageName = time() . '.' . $request->image_name->extension();  
        $request->image_name->move(public_path('images'), $imageName); // Verplaats afbeelding naar de publieke map
        $bear->image = 'images/' . $imageName; // Update het pad naar de afbeelding
    }

    $bear->save();

    // Redirect na succesvolle update
    return redirect()->route('bears.index')->with('success', 'Bear updated successfully!');
}


    // Verwijdert de beer
    public function destroy($id)
    {
        $bear = Bear::findOrFail($id);
        $bear->delete();

        return redirect()->route('bears.index')->with('success', 'Bear deleted successfully!');
    }
}


