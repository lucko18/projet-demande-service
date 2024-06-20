@extends('layouts.app')

@section('content')
    <h1>Ajouter un Citoyen</h1>

    <form action="{{ route('citoyens.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>
        <div class="form-group">
            <label for="lieu_naissance">Lieu de Naissance</label>
            <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
            <label for="cnib">CNIB</label>
            <input type="text" class="form-control" id="cnib" name="cnib" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('citoyens.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
