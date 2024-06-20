@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Citoyens</h1>
        <a href="{{ route('citoyens.create') }}" class="btn btn-primary">Ajouter un Citoyen</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Acceuil</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Lieu de Naissance</th>
                <th>Téléphone</th>
                <th>CNIB</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citoyens as $citoyen)
                <tr>
                    <td>{{ $citoyen->nom }}</td>
                    <td>{{ $citoyen->prenom }}</td>
                    <td>{{ $citoyen->date_naissance }}</td>
                    <td>{{ $citoyen->lieu_naissance }}</td>
                    <td>{{ $citoyen->telephone }}</td>
                    <td>{{ $citoyen->cnib }}</td>
                    <td>
                        <a href="{{ route('citoyens.edit', $citoyen->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('citoyens.destroy', $citoyen->id) }}" method="POST" class="d-inline">
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