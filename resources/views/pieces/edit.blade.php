@extends('layouts.app')

@section('content')
    <h1>Modifier la Pièce</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pieces.update', $piece->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" class="form-control" id="intitule" name="intitule" value="{{ $piece->intitule }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('pieces.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
