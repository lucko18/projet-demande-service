<?php

namespace App\Http\Controllers;

use App\Models\Citoyen;
use Illuminate\Http\Request;

class CitoyenController extends Controller
{
    public function index()
    {
        $citoyens = Citoyen::all();
        return view('citoyens.index', compact('citoyens'));
    }

    public function create()
    {
        return view('citoyens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'telephone' => 'required',
            'cnib' => 'required|unique:citoyens,cnib',
        ]);

        Citoyen::create($request->all());

        return redirect()->route('citoyens.index')->with('success', 'Citoyen ajouté avec succès.');
    }

    public function show(Citoyen $citoyen)
    {
        return view('citoyens.show', compact('citoyen'));
    }

    public function edit(Citoyen $citoyen)
    {
        return view('citoyens.edit', compact('citoyen'));
    }

    public function update(Request $request, Citoyen $citoyen)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'telephone' => 'required',
            'cnib' => 'required|unique:citoyens,cnib,' . $citoyen->id,
        ]);

        $citoyen->update($request->all());

        return redirect()->route('citoyens.index')->with('success', 'Citoyen mis à jour avec succès.');
    }

    public function destroy(Citoyen $citoyen)
    {
        $citoyen->delete();

        return redirect()->route('citoyens.index')->with('success', 'Citoyen supprimé avec succès.');
    }
}
