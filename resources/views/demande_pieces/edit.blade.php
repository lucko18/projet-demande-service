@extends('layouts.app')

@section('content')
    <h1>Modifier la Demande de Pièce</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('demande_pieces.update', $demandePiece->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="piece_id">Pièce</label>
            <select class="form-control" id="piece_id" name="piece_id" required>
                @foreach ($pieces as $piece)
                    <option value="{{ $piece->id }}" {{ $demandePiece->piece_id == $piece->id ? 'selected' : '' }}>
                        {{ $piece->intitule }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="demande_id">Demande</label>
            <select class="form-control" id="demande_id" name="demande_id" required>
                @foreach ($demandes as $demande)
                    <option value="{{ $demande->id }}" {{ $demandePiece->demande_id == $demande->id ? 'selected' : '' }}>
                        {{ $demande->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="chemin_fichier">Chemin Fichier</label>
            <input type="text" class="form-control" id="chemin_fichier" name="chemin_fichier" value="{{ $demandePiece->chemin_fichier }}" required>
        </div>
        <div class="form-group">
            <label for="nom_fichier">Nom Fichier</label>
            <input type="text" class="form-control" id="nom_fichier" name="nom_fichier" value="{{ $demandePiece->nom_fichier }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('demande_pieces.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
