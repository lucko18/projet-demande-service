<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Custom styles -->
    <style>
        .custom-bg-gray {
            background-color: #f3f4f6; /* Custom gray background */
        }
        .custom-text-gray {
            color: #6b7280; /* Custom gray text */
        }
        .bg-image {
            background-image: url('https://source.unsplash.com/random'); /* Example image from Unsplash */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="antialiased bg-image">
    <div class="relative d-flex justify-content-center align-items-center min-vh-100 custom-bg-gray">
        <!-- Ajout du message de bienvenue -->
        <div class="text-center">
            <h1 class="display-3 fw-bold custom-text-gray mt-5 mb-4">Bienvenue sur le site de demande de pièce</h1>
        </div>

        @if (Route::has('login'))
            <div class="fixed-top end-0 p-3 text-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-3">Tableau de bord</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-3">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Créer un compte</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
