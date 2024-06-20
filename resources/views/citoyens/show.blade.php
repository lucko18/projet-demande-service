@extends('layouts.app')

@section('content')
    <h1>Afficher le Citoyen</h1>

    <div class="card">
        <div class="card-header">
            Détails du Citoyen
        </div>
        <div class="card-body">
            <p><strong>Nom:</strong> {{ $citoyen->nom }}</p>
            <p><strong>Prénom:</strong> {{ $citoyen->prenom }}</p>
            <p><strong>Date de Naissance:</strong> {{ $citoyen->date_naissance }}</p>
            <p><strong>Lieu de Naissance:</strong> {{ $citoyen->lieu_naissance }}</p>
            <p><strong>Téléphone:</strong> {{ $citoyen->telephone }}</p>
            <p><strong>CNIB:</strong> {{ $citoyen->cnib }}</p>
            <a href="{{ route('citoyens.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
@endsection
