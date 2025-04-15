@extends('Auth.layout')

@section('title', 'Connexion')

@section('content')
<div class="container animate__animated animate__fadeIn">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8 col-lg-6">
            <div class="login-card p-4 p-md-5">
                <div class="text-center mb-4 animate__animated animate__fadeInDown">
                    <img src="{{ asset('img/LOGO.png')}}" alt="Logo REC" class="mb-3" style="max-width: 150px;">
                    <h2 class="fw-bold">Connexion</h2>
                    <p class="text-muted">Entrez vos informations pour accéder à votre espace 😊💦!</p>
                </div>

                <form class="animate__animated animate__fadeInUp shadow p-4 rounded">
                    <!-- Champ Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope" style="color: #007bff;"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="votre@email.com" required>
                        </div>
                    </div>

                    <!-- Champ Mot de passe -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock" style="color: #28a745;"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                        </div>
                    </div>

                    <!-- Options supplémentaires -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                        </div>
                        <a href="MotPasseOublier.html" class="text-decoration-none">Mot de passe oublié ?</a>
                    </div>

                    <!-- Bouton de connexion -->
                    <a href="dashbord.html" class="btn btn-primary w-100 mb-3 animate__animated animate__pulse animate__infinite">Se connecter</a>

                    <!-- Séparateur -->
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center mx-3 mb-0 text-muted">OU</p>
                    </div>

                    <!-- Boutons de connexion tiers -->
                    <div class="d-grid gap-2 animate__animated animate__fadeInUp animate__delay-1s">
                        <button type="button" class="btn btn-google btn-outline-secondary" onmouseover="this.style.color='white'; this.querySelector('i').style.color='white'" onmouseout="this.style.color=''; this.querySelector('i').style.color='#DB4437'">
                            <i class="fab fa-google me-2" style="color: #DB4437;"></i>  Continuer avec Google
                        </button>
                        <button type="button" class="btn btn-facebook btn-outline-secondary" onmouseover="this.style.color='white'; this.querySelector('i').style.color='white'" onmouseout="this.style.color=''; this.querySelector('i').style.color='#4267B2'">
                             <i class="fab fa-facebook-f me-2" style="color: #4267B2;"></i> Continuer avec Facebook
                        </button>
                    </div>                        <!-- Lien vers l'inscription -->
                    <div class="text-center mt-4 animate__animated animate__fadeIn animate__delay-2s">
                        <p class="text-muted">Vous n'avez pas de compte ? <a href="{{ route('register')}}" class="text-decoration-none">S'inscrire</a></p>
                    </div>
                </form>
                <!-- Téléchargement de l'application -->
                <div class="text-center mt-3 animate__animated animate__fadeIn animate__delay-2s">
                    <p class="text-muted">Téléchargez notre application pour une meilleure expérience 🚀!</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-outline-dark animate__animated animate__pulse animate__infinite">
                            <i class="fas fa-registered me-2"></i>Rec App                                                </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
