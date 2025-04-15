@extends('Auth.layout')

@section('title', 'Inscription')

@section('content')

iv class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8 col-lg-6">
                <div class="login-card p-4 p-md-5">
                    <div class="text-center mb-4">
                        <img src="{{ asset('img/LOGO.png')}}" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                        <h2 class="fw-bold">Créer un compte</h2>
                        <p class="text-muted">Remplissez le formulaire pour vous inscrire 😊</p>
                    </div>
                    <form class="animate__animated animate__fadeInUp shadow p-4 rounded">
                        <!-- Champ Nom complet -->
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nom complet</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user text-primary"></i></span>
                                <input type="text" class="form-control" id="fullname" placeholder="Jean Dupont" required>
                            </div>
                        </div>

                        <!-- Champ Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope text-success"></i></span>
                                <input type="email" class="form-control" id="email" placeholder="votre@email.com" required>
                            </div>
                        </div>

                        <!-- Champ Mot de passe -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock text-danger"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                            </div>
                            <div class="form-text">8 caractères minimum avec au moins un chiffre</div>
                        </div>

                        <!-- Confirmation Mot de passe -->
                        <div class="mb-4">
                            <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock text-danger"></i></span>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="••••••••" required>
                            </div>
                        </div>
                        <!-- Case à cocher pour les CGU -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    J'accepte les <a href="#" class="text-decoration-none">Conditions Générales d'Utilisation</a>
                                </label>
                            </div>
                        </div>

                        <!-- Bouton d'inscription -->
                        <button type="submit" class="btn btn-primary w-100 mb-3">S'inscrire</button>

                        <!-- Séparateur -->
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center mx-3 mb-0 text-muted">OU</p>
                        </div>

                        <!-- Boutons de connexion tiers -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-google btn-outline-secondary">
                                <i class="fab fa-google me-2"></i> S'inscrire avec Google
                            </button>
                            <button type="button" class="btn btn-facebook btn-outline-secondary">
                                <i class="fab fa-facebook-f me-2"></i> S'inscrire avec Facebook
                            </button>
                        </div>

                        <!-- Lien vers la connexion -->
                        <div class="text-center mt-4">
                            <p class="text-muted">Vous avez déjà un compte ? <a href="{{ route('login')}}" class="text-decoration-none">Se connecter</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
