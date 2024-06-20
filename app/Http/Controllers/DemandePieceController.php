<?php

namespace App\Http\Controllers;

use App\Models\DemandePiece;
use App\Models\Piece;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandePieceController extends Controller
{
    // Afficher une liste de toutes les demandes de pièces
    public function index()
    {
        $demandePieces = DemandePiece::all();
        return view('demande_pieces.index', compact('demandePieces'));
    }

    // Afficher le formulaire pour créer une nouvelle demande de pièce
    public function create()
    {
        $pieces = Piece::all();
        $demandes = Demande::all();
        return view('demande_pieces.create', compact('pieces', 'demandes'));
    }

    // Enregistrer une nouvelle demande de pièce
    public function store(Request $request)
    {
        $request->validate([
            'piece_id' => 'required|exists:pieces,id',
            'demande_id' => 'required|exists:demandes,id',
            'chemin_fichier' => 'required|file|mimes:pdf,jpg,png,doc,docx', // Ajoutez les types de fichiers acceptés
            'nom_fichier' => 'required|string|max:255',
        ]);

        // Manipulation du fichier uploadé
        if ($request->hasFile('chemin_fichier')) {
            $file = $request->file('chemin_fichier');
            $path = $file->store('uploads', 'public'); // Sauvegarde dans le stockage public

            // Créer une nouvelle instance de DemandePiece
            DemandePiece::create([
                'piece_id' => $request->piece_id,
                'demande_id' => $request->demande_id,
                'chemin_fichier' => $path,
                'nom_fichier' => $request->nom_fichier,
            ]);

            return redirect()->route('demande_pieces.index')->with('success', 'Demande de pièce ajoutée avec succès.');
        }

        return back()->withErrors('Erreur lors du téléchargement du fichier.');
    }
    // Afficher une demande de pièce spécifique
    public function show(DemandePiece $demandePiece)
    {
        return view('demande_pieces.show', compact('demandePiece'));
    }

    // Afficher le formulaire pour modifier une demande de pièce existante
    public function edit(DemandePiece $demandePiece)
    {
        $pieces = Piece::all();
        $demandes = Demande::all();
        return view('demande_pieces.edit', compact('demandePiece', 'pieces', 'demandes'));
    }

    // Mettre à jour une demande de pièce existante
    public function update(Request $request, DemandePiece $demandePiece)
    {
        $request->validate([
            'piece_id' => 'required|exists:pieces,id',
            'demande_id' => 'required|exists:demandes,id',
            'chemin_fichier' => 'required',
            'nom_fichier' => 'required',
        ]);

        $demandePiece->update($request->all());

        return redirect()->route('demande_pieces.index')->with('success', 'Demande de pièce mise à jour avec succès.');
    }

    // Supprimer une demande de pièce existante
    public function destroy(DemandePiece $demandePiece)
    {
        $demandePiece->delete();

        return redirect()->route('demande_pieces.index')->with('success', 'Demande de pièce supprimée avec succès.');
    }
}
