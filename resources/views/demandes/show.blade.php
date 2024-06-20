@extends('layouts.app')

@section('content')
    <h1>Afficher la Demande</h1>

    <div class="card">
        <div class="card-header">
            Détails de la Demande
        </div>
        <div class="card-body">
            <p><strong>Citoyen:</strong> {{ $demande->citoyen->nom }} {{ $demande->citoyen->prenom }}</p>
            <p><strong>Service:</strong> {{ $demande->service->intitule }}</p>
            <a href="{{ route('demandes.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
@endsection
