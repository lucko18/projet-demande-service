@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Pièces</h1>
        <a href="{{ route('pieces.create') }}" class="btn btn-primary">Ajouter une Pièce</a>
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
                <th>Intitulé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pieces as $piece)
                <tr>
                    <td>{{ $piece->intitule }}</td>
                    <td>
                        <a href="{{ route('pieces.edit', $piece->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('pieces.destroy', $piece->id) }}" method="POST" class="d-inline">
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
