@extends('layouts.app')

@section('content')
    <h1>Modifier la Demande</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('demandes.update', $demande->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="citoyen_id">Citoyen</label>
            <select class="form-control" id="citoyen_id" name="citoyen_id" required>
                @foreach ($citoyens as $citoyen)
                    <option value="{{ $citoyen->id }}" {{ $demande->citoyen_id == $citoyen->id ? 'selected' : '' }}>
                        {{ $citoyen->nom }} {{ $citoyen->prenom }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="service_id">Service</label>
            <select class="form-control" id="service_id" name="service_id" required>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" {{ $demande->service_id == $service->id ? 'selected' : '' }}>
                        {{ $service->intitule }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('demandes.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
