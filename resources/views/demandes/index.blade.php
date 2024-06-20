@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Demandes</h1>
        <a href="{{ route('demandes.create') }}" class="btn btn-primary">Ajouter une Demande</a>
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
                <th>Citoyen</th>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($demandes as $demande)
                <tr>
                    <td>{{ $demande->citoyen->nom }} {{ $demande->citoyen->prenom }}</td>
                    <td>{{ $demande->service->intitule }}</td>
                    <td>
                        <a href="{{ route('demandes.show', $demande->id) }}" class="btn btn-info btn-sm">Afficher</a>
                        <a href="{{ route('demandes.edit', $demande->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('demandes.destroy', $demande->id) }}" method="POST" class="d-inline">
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
