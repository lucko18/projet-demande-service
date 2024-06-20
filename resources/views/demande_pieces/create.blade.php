@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Ajouter une Demande de Pièce') }}</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('demande_pieces.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="piece_id">Pièce</label>
                            <select class="form-control" id="piece_id" name="piece_id" required>
                                @foreach ($pieces as $piece)
                                    <option value="{{ $piece->id }}">{{ $piece->intitule }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="demande_id">Demande</label>
                            <select class="form-control" id="demande_id" name="demande_id" required>
                                @foreach ($demandes as $demande)
                                    <option value="{{ $demande->id }}">{{ $demande->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="chemin_fichier">Chemin Fichier</label>
                            <input type="file" class="form-control" id="chemin_fichier" name="chemin_fichier" required>
                        </div>
                        <div class="form-group">
                            <label for="nom_fichier">Nom Fichier</label>
                            <input type="text" class="form-control" id="nom_fichier" name="nom_fichier" required>
                        </div>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                        <a href="{{ route('demande_pieces.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection