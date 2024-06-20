@extends('layouts.app')

@section('content')
    <h1>Ajouter un Service</h1>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" class="form-control" id="intitule" name="intitule" required>
        </div>
        <div class="form-group">
            <label for="frais_dossier">Frais Dossier</label>
            <input type="number" step="0.01" class="form-control" id="frais_dossier" name="frais_dossier" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
