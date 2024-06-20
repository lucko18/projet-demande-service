@extends('layouts.app')

@section('content')
    <h1>Ajouter une Demande</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('demandes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="citoyen_id">Citoyen</label>
            <select class="form-control" id="citoyen_id" name="citoyen_id" required>
                @foreach ($citoyens as $citoyen)
                    <option value="{{ $citoyen->id }}">{{ $citoyen->nom }} {{ $citoyen->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="service_id">Service</label>
            <select class="form-control" id="service_id" name="service_id" required>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->intitule }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('demandes.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
