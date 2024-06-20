@extends('layouts.app')

@section('content')
    <h1>Afficher la Pièce</h1>

    <div class="card">
        <div class="card-header">
            Détails de la Pièce
        </div>
        <div class="card-body">
            <p><strong>Intitulé:</strong> {{ $piece->intitule }}</p>
            <a href="{{ route('pieces.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
@endsection
