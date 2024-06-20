
<div class="card text-center mx-auto" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Réinitialisation du mot de passe</div>
    <div class="card-body px-5">
        <p class="card-text py-2">
            Entrez votre adresse e-mail et nous vous enverrons un e-mail avec des instructions pour réinitialiser votre mot de passe.
        </p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div data-mdb-input-init class="form-outline">
                <input type="email" id="email" name="email" class="form-control my-3" :value="old('email')" required autofocus />
                <label class="form-label" for="email">Adresse e-mail</label>
                @error('email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

                           <button type="submit" data-mdb-ripple-init class="btn btn-primary w-100">Réinitialiser le mot de passe</button>
        </form>
        <div class="d-flex justify-content-between mt-4">
            <a class="" href="{{ route('login') }}">Connexion</a>
            <a class="" href="{{ route('register') }}">Inscription</a>
        </div>
    </div>
</div>
