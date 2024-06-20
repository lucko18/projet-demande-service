<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    // Afficher une liste de toutes les pièces
    public function index()
    {
        $pieces = Piece::all();
        return view('pieces.index', compact('pieces'));
    }

    // Afficher le formulaire pour créer une nouvelle pièce
    public function create()
    {
        return view('pieces.create');
    }

    // Enregistrer une nouvelle pièce
    public function store(Request $request)
    {
        $request->validate([
            'intitule' => 'required|unique:pieces,intitule',
        ]);

        Piece::create($request->all());

        return redirect()->route('pieces.index')->with('success', 'Pièce ajoutée avec succès.');
    }

    // Afficher une pièce spécifique
    public function show(Piece $piece)
    {
        return view('pieces.show', compact('piece'));
    }

    // Afficher le formulaire pour modifier une pièce existante
    public function edit(Piece $piece)
    {
        return view('pieces.edit', compact('piece'));
    }

    // Mettre à jour une pièce existante
    public function update(Request $request, Piece $piece)
    {
        $request->validate([
            'intitule' => 'required|unique:pieces,intitule,' . $piece->id,
        ]);

        $piece->update($request->all());

        return redirect()->route('pieces.index')->with('success', 'Pièce mise à jour avec succès.');
    }

    // Supprimer une pièce existante
    public function destroy(Piece $piece)
    {
        $piece->delete();

        return redirect()->route('pieces.index')->with('success', 'Pièce supprimée avec succès.');
    }
}
