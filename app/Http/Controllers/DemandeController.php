<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Citoyen;
use App\Models\Service;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    // Afficher une liste de toutes les demandes
    public function index()
    {
        $demandes = Demande::with('citoyen', 'service')->get();
        return view('demandes.index', compact('demandes'));
    }

    // Afficher le formulaire pour créer une nouvelle demande
    public function create()
    {
        $citoyens = Citoyen::all();
        $services = Service::all();
        return view('demandes.create', compact('citoyens', 'services'));
    }

    // Enregistrer une nouvelle demande
    public function store(Request $request)
    {
        $request->validate([
            'citoyen_id' => 'required|exists:citoyens,id',
            'service_id' => 'required|exists:services,id',
        ]);

        Demande::create($request->all());

        return redirect()->route('demandes.index')->with('success', 'Demande ajoutée avec succès.');
    }

    // Afficher une demande spécifique
    public function show(Demande $demande)
    {
        $demande->load('citoyen', 'service');
        return view('demandes.show', compact('demande'));
    }

    // Afficher le formulaire pour modifier une demande existante
    public function edit(Demande $demande)
    {
        $citoyens = Citoyen::all();
        $services = Service::all();
        return view('demandes.edit', compact('demande', 'citoyens', 'services'));
    }

    // Mettre à jour une demande existante
    public function update(Request $request, Demande $demande)
    {
        $request->validate([
            'citoyen_id' => 'required|exists:citoyens,id',
            'service_id' => 'required|exists:services,id',
        ]);

        $demande->update($request->all());

        return redirect()->route('demandes.index')->with('success', 'Demande mise à jour avec succès.');
    }

    // Supprimer une demande existante
    public function destroy(Demande $demande)
    {
        $demande->delete();

        return redirect()->route('demandes.index')->with('success', 'Demande supprimée avec succès.');
    }
}
