@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Coat_of_arms_of_Burkina_Faso.svg"
                alt="formulaire de connexion" class="img-fluid"  />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                @if (session('status'))
                  <div class="alert alert-success mb-4" role="alert">
                      {{ session('status') }}
                  </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="d-flex align-items-center mb-2 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Bienvenue</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>

                  <div class="form-outline mb-2">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"/>
                    <label class="form-label" for="email">Adresse e-mail</label>
                    @error('email')
                      <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-outline mb-2">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="current-password"/>
                    <label class="form-label" for="password">Mot de passe</label>
                    @error('password')
                      <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-check mb-2">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember_me">Rester connecté</label>
                  </div>

                  <div class="pt-1 mb-2">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Connexion</button>
                  </div>

                  @if (Route::has('password.request'))
                    <a class="small text-muted" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                  @endif
                  <p class="mb-3 pb-lg-2" style="color: #393f81;">Vous n'avez pas de compte? <a href="{{ route('register') }}" style="color: #393f81;">Inscrivez-vous ici</a></p>
                  <a href="#!" class="small text-muted">Tous droit réservé|Luc W OUEDRAOGO 70996062|oluc.cd@gmail.com</a>
                
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
