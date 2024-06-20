@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Demandes de Pièces</h1>
        <a href="{{ route('demande_pieces.create') }}" class="btn btn-primary">Ajouter une Demande de Pièce</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Acceuil</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Pièce</th>
                <th>Demande</th>
                <th>Chemin Fichier</th>
                <th>Nom Fichier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($demandePieces as $demandePiece)
                <tr>
                    <td>{{ $demandePiece->piece->intitule }}</td>
                    <td>{{ $demandePiece->demande->id }}</td>
                    <td>{{ $demandePiece->chemin_fichier }}</td>
                    <td>{{ $demandePiece->nom_fichier }}</td>
                    <td>
                        <a href="{{ route('demande_pieces.show', $demandePiece->id) }}" class="btn btn-info btn-sm">Afficher</a>
                        <a href="{{ route('demande_pieces.edit', $demandePiece->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('demande_pieces.destroy', $demandePiece->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
