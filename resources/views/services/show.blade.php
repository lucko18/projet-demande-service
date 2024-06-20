@extends('layouts.app')

@section('content')
    <h1>Afficher le Service</h1>

    <div class="card">
        <div class="card-header">
            Détails du Service
        </div>
        <div class="card-body">
            <p><strong>Code:</strong> {{ $service->code }}</p>
            <p><strong>Intitulé:</strong> {{ $service->intitule }}</p>
            <p><strong>Frais Dossier:</strong> {{ $service->frais_dossier }}</p>
            <a href="{{ route('services.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
@endsection
