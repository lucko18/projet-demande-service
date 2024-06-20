@extends('layouts.app')

@section('content')
    <h1>Modifier le Service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $service->code }}" required>
        </div>
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" class="form-control" id="intitule" name="intitule" value="{{ $service->intitule }}" required>
        </div>
        <div class="form-group">
            <label for="frais_dossier">Frais Dossier</label>
            <input type="number" step="0.01" class="form-control" id="frais_dossier" name="frais_dossier" value="{{ $service->frais_dossier }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
