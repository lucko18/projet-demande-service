<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Afficher une liste de tous les services
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    // Afficher le formulaire pour créer un nouveau service
    public function create()
    {
        return view('services.create');
    }

    // Enregistrer un nouveau service
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:services,code',
            'intitule' => 'required',
            'frais_dossier' => 'required|numeric',
        ]);

        Service::create($request->all());

        return redirect()->route('services.index')->with('success', 'Service ajouté avec succès.');
    }

    // Afficher un service spécifique
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // Afficher le formulaire pour modifier un service existant
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Mettre à jour un service existant
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'code' => 'required|unique:services,code,' . $service->id,
            'intitule' => 'required',
            'frais_dossier' => 'required|numeric',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
    }

    // Supprimer un service existant
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
    }
}
