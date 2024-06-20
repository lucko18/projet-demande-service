
@extends('layouts.app')
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-4 mt-4">S'inscrire</p>

                <form method="POST" action="{{ route('register') }}" class="mx-1 mx-md-4">
                  @csrf

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="text" id="name" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name" />
                      <label class="form-label" for="name">Votre nom</label>
                      <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autocomplete="username" />
                      <label class="form-label" for="email">Votre adresse e-mail</label>
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="password" class="form-control" name="password" required autocomplete="new-password" />
                      <label class="form-label" for="password">Mot de passe</label>
                      <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                      <label class="form-label" for="password_confirmation">Répétez votre mot de passe</label>
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-4">
                    <label class="form-check-label" for="form2Example3c">
                    <a>J'accepte tous les termes dans <a href="#!">les conditions d'utilisation</a><br>
                       <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">S'inscrire</button>
                  </div>

                  <div class="d-flex justify-content-center">
                    <a class="text-muted" href="{{ route('login') }}">Déjà inscrit? Connectez-vous ici</a>
                  </div>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Coat_of_arms_of_Burkina_Faso.svg"
                  class="img-fluid" alt="Image d'exemple">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
