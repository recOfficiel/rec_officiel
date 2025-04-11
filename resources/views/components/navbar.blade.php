
  <!-- Topbar Start -->
  <div class="container-fluid" style="background-color: #293070; color: white;">
    <div class="container py-3">
        <div class="d-flex flex-column flex-lg-row align-items-center">
            <a href="index.html" class="d-flex align-items-center mb-3 mb-lg-0 d-none d-lg-flex">
                <img src="{{ asset('img/LOGO.png') }}" alt="R.E.C Logo" style="height: 60px;">
                <p class="text-white fw-bold mb-0 ms-3 animate__animated animate__bounce animate__infinite">R.E.C - Répresentation des Etudians du Congo</p>
            </a>
            <div class="ms-lg-auto d-flex align-items-center">
                <small class="ms-lg-4 d-none d-lg-block"><i class="fa fa-map-marker-alt me-3"></i>Kinshasa, Gombe 23bis</small>
                <small class="ms-lg-4 d-none d-lg-block"><i class="fa fa-envelope me-3"></i>recofficiel319@gmail.com</small>
                <small class="ms-lg-4 d-none d-lg-block"><i class="fa fa-phone-alt me-3"></i>+243 827 355 011</small>
                <div class="ms-lg-3 d-flex">
                    <a class="btn btn-sm-square btn-light rounded-circle ms-2 animate__animated hover-animate" href="https://www.facebook.com/profile.php?id=61573605884197" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')" style="color: #000959;"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-light rounded-circle ms-2 animate__animated hover-animate" href="https://x.com/ispt_kin93348/status/1909176965795360903" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')" style="color: #000959;"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light rounded-circle ms-2 animate__animated hover-animate" href="www.linkedin.com/in/rec-officiel-b52b61358" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')" style="color: #000959;"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="index.html" class="navbar-brand d-lg-none">
                <img src="{{ asset('img/LOGO.png') }}" alt="R.E.C Logo" style="height: 40px;">
                <h1 class="fw-bold m-0">R.E.C</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home')}}" class="nav-item nav-link @if (request()->is('/')) active @endif wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Accueil</a>
                    <a href="{{ route('apropos')}}" class="nav-item nav-link @if (request()->is('/apropos')) active @endif wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">À propos</a>
                    <a href="{{ route('annonce')}}" class="nav-item nav-link  @if (request()->is('/annonce')) active @endif wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Actualités et Evénements</a>
                    <a href="service.html" class="nav-item nav-link wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Services aux Etudiants</a>
                    <div class="nav-item dropdown wow fadeInDown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Autre Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                          <a href="project.html" class="dropdown-item" >Nos Projets</a>
                            <a href="team.html" class="dropdown-item" >Notre Équipe</a>
                            <a href="testimonial.html" class="dropdown-item">Témoignages</a>
                            <a href="#" class="dropdown-item">Gallery</a>
                            <a href="#" class="dropdown-item">FAQ</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-3 wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#ffff'" onmouseout="this.style.color=''" style="background-color: #293070;">Télécharger</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
