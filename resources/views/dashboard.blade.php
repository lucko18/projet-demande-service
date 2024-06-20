@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-primary">
                    <h2 style="color: white;">{{ __('Tableau de bord') }}</h2>
                </div>
                <div class="card-body text-center">
                    <p style="color: green;">{{ __("Vous êtes maintenant connecté!") }}</p>
                    <div class="row text-center">
                        <div class="col-md-2 mb-2">
                            <a href="{{ route('services.index') }}" class="btn btn-primary btn-lg btn-block fs-4">
                                🛠️ Services
                            </a>
                        </div>
                        <div class="col-md-2 mb-2">
                            <a href="{{ route('pieces.index') }}" class="btn btn-info btn-lg btn-block fs-4">
                                📄 Pièces
                            </a>
                        </div>
                        <div class="col-md-2 mb-2">
                            <a href="{{ route('demandes.index') }}" class="btn btn-warning btn-lg btn-block fs-4">
                                📑Demande
                            </a>
                        </div>
                        <div class="col-md-2 mb-2">
                            <a href="{{ route('demande_pieces.index') }}" class="btn btn-danger btn-lg btn-block fs-4">
                                📁D_Pièces
                            </a>
                        </div>
                        <div class="col-md-2 mb-2">
                            <a href="{{ route('citoyens.index') }}" class="btn btn-success btn-lg btn-block fs-4">
                                👥 Citoyens
                            </a>
                        </div>
                        <div class="col-md-2 mb-2">
                            <!-- Logout Button -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-secondary btn-lg btn-block fs-4">
                                    🔒 Fermer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
