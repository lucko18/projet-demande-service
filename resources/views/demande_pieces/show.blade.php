@extends('layouts.app')

@section('content')
    <h1>Détails de la Demande de Pièce</h1>
    <p><strong>Pièce :</strong> {{ $demandePiece->piece->intitule }}</p>
    <p><strong>Demande :</strong> {{ $demandePiece->demande->id }}</p>
    <p><strong>Chemin Fichier :</strong> {{ $demandePiece->chemin_fichier }}</p>
    <p><strong>Nom Fichier :</strong> {{ $demandePiece->nom_fichier }}</p>
    <a href="{{ route('demande_pieces.index') }}" class="btn btn-primary">Retour</a>
@endsection
