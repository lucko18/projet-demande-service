@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary">Ajouter un Service</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Code</th>
                <th>Intitulé</th>
                <th>Frais Dossier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->code }}</td>
                    <td>{{ $service->intitule }}</td>
                    <td>{{ $service->frais_dossier }}</td>
                    <td>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
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
