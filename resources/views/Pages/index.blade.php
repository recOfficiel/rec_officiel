@extends('Pages.layout')

@section('title', 'Home')

@section('content')

  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->
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
                      <a href="index.html" class="nav-item nav-link active wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Accueil</a>
                      <a href="about.html" class="nav-item nav-link wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">À propos</a>
                      <a href="event.html" class="nav-item nav-link wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Actualités et Evénements</a>
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


<!-- Carousel Start -->
<div class="container-fluid px-0 mb-3">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="max-height: 100vh;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/Etudiant.jpg') }}" alt="Image" style="max-height: 90vh; object-fit: cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-2 text-white animated slideInRight">Bienvenue à la <strong>R.E.C</strong></p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">La Répresentation des Etudiants du Congo</h1>
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4 animated slideInRight" style="background-color: #293070;">En savoir plus</a>                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"  style="max-height: 90vh; object-fit: cover;">
                <img class="w-100" src="{{ asset('img/Etudiant 2.jpg') }}" alt="Image" style="max-height: 90vh; object-fit: cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-2 text-white animated slideInLeft">Bienvenue à la <strong>R.E.C</strong></p>
                                <h1 class="display-1 text-white mb-4 animated slideInLeft">La Répresentations des Etudiant du Congo</h1>
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4 animated slideInLeft" style="background-color: #293070;">En savoir plus</a>                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->

<section id="about" class=" section my-5">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4 mb-5 align-items-center justify-content-between">

        <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
          <span class="about-meta" style="color: #3C3882; font-weight: bold; font-size: 1.2em; text-transform: uppercase;">À PROPOS DE NOUS</span>
          <h2 class="about-title" style="color: #333; font-size: 2.5em; margin: 20px 0;">La Représentation des Étudiants du Congo (R.E.C)</h2>
          <p class="about-description" style="font-size: 1.1em; line-height: 1.8; color: #666;">
            La Représentation des Étudiants du Congo (R.E.C) est une organisation estudiantine dynamique
            qui se consacre à la défense et à la promotion des intérêts des étudiants congolais.
            Notre organisation s'engage à créer un environnement académique favorable et à soutenir
            l'excellence dans l'enseignement supérieur, tout en favorisant l'unité et la solidarité
            au sein de la communauté étudiante congolaise.
          </p>
  <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.2s">
<nav>
  <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
      <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
          data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
          aria-selected="true">Mission</button>
      <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
          data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
          aria-selected="false">Vision</button>
      <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
          data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
          aria-selected="false">Objectif</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
      aria-labelledby="nav-story-tab">
      <p>Notre mission est de représenter et défendre les intérêts des étudiants congolais,
         promouvoir l'excellence académique, et faciliter leur intégration et leur réussite
         dans l'enseignement supérieur. Nous nous engageons à être la voix des étudiants
         et à créer des opportunités pour leur développement.</p>
  </div>
  <div class="tab-pane fade" id="nav-mission" role="tabpanel"
      aria-labelledby="nav-mission-tab">
      <p>
        Devenir l'organisation estudiantine de référence au Congo, reconnue pour son engagement
        envers l'excellence académique, la solidarité estudiantine et la promotion des valeurs
        d'unité et de progrès au sein de la communauté étudiante.
      </p>
  </div>
  <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
      <p>Nos objectifs sont de renforcer la représentation étudiante, améliorer les conditions
         d'études, promouvoir l'excellence académique, et créer un réseau solide d'entraide
         et de soutien entre étudiants congolais.</p>
  </div>
</div>
</div> <br><br>

          <div class="row feature-list-wrapper">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <ul class="feature-list" style="list-style: none; padding-left: 0;">
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Représentation étudiante</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Soutien académique</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Défense des droits</li>
              </ul>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <ul class="feature-list" style="list-style: none; padding-left: 0;">
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Réseau d'entraide</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Activités culturelles</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Integration étudiante</li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
          <div class="image-wrapper">
            <div class="images position-relative" style="margin-left: 50px;">
              <img src="{{ asset('img/LOGO.png') }}" alt="Étudiants REC" class="img-fluid main-image rounded-4 wow zoomIn" data-wow-delay="0.2s" style="max-width: 80%; width: 100%; height: 40%;">
            </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

<!-- About Start -->
<div class="container-xxl about my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="fs-5 fw-medium text-primary">Qui sommes-nous ?</p>
                    <h1 class="display-6 mb-4">La Représentation des Étudiants du Congo (R.E.C)</h1>
                    <p class="mb-4">La R.E.C est une organisation estudiantine dédiée à la représentation et à la défense des intérêts des étudiants congolais. Notre mission est de créer un environnement académique favorable et de promouvoir l'excellence dans l'enseignement supérieur.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('img/icon/icon-education.png') }}" alt="">
                            <h5 class="mb-3">Excellence Académique</h5>
                            <span>Promotion de la qualité de l'enseignement et de la réussite estudiantine</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('img/icon/icon-community.png') }}" alt="">
                            <h5 class="mb-3">Communauté Étudiante</h5>
                            <span>Création d'un réseau solidaire et dynamique d'étudiants congolais</span>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="" style="background-color: #293070;">En savoir plus</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
              <p class="fs-5 fw-medium" style="color: #293070;">Nos Services</p>
              <h1 class="display-5 mb-5">Les Services que nous Proposons aux Étudiants</h1>
          </div>
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item position-relative h-100">
                      <div class="service-text rounded p-5">
                          <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                              <i class="fa fa-headset fa-2x" style="color: #4CAF50;"></i>
                          </div>
                          <h5 class="mb-3">Accompagnement Académique</h4>
                          <p class="mb-0">Soutien personnalisé dans les études et conseils pour la réussite universitaire</p>
                      </div>
                      <div class="service-btn rounded-0 rounded-bottom">
                          <a class="text-primary fw-medium" href="">En savoir plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item position-relative h-100">
                      <div class="service-text rounded p-5">
                          <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                              <i class="fa fa-compass fa-2x" style="color: #2196F3;"></i>
                          </div>
                          <h5 class="mb-3">Orientation Professionnelle</h4>
                          <p class="mb-0">Guidance dans le choix de carrière et mise en relation avec des professionnels</p>
                      </div>
                      <div class="service-btn rounded-0 rounded-bottom">
                          <a class="text-primary fw-medium" href="">En savoir plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item position-relative h-100">
                      <div class="service-text rounded p-5">
                          <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                              <i class="fa fa-calendar fa-2x" style="color: #FF9800;"></i>
                          </div>
                          <h5 class="mb-3">Événements Étudiants</h4>
                          <p class="mb-0">Organisation de rencontres, conférences et activités culturelles</p>
                      </div>
                      <div class="service-btn rounded-0 rounded-bottom">
                          <a class="text-primary fw-medium" href="">En savoir plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item position-relative h-100">
                      <div class="service-text rounded p-5">
                          <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                              <i class="fa fa-home fa-2x" style="color: #9C27B0;"></i>
                          </div>
                          <h5 class="mb-3">Aide au Logement</h4>
                          <p class="mb-0">Assistance dans la recherche de logement et conseils pour l'installation</p>
                      </div>
                      <div class="service-btn rounded-0 rounded-bottom">
                          <a class="text-primary fw-medium" href="">En savoir plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item position-relative h-100">
                      <div class="service-text rounded p-5">
                          <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                              <i class="fa fa-heart fa-2x" style="color: #E91E63;"></i>
                          </div>
                          <h5 class="mb-3">Santé et Bien-être</h4>
                          <p class="mb-0">Support pour l'accès aux soins et accompagnement psychologique</p>
                      </div>
                      <div class="service-btn rounded-0 rounded-bottom">
                          <a class="text-primary fw-medium" href="">En savoir plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item position-relative h-100">
                      <div class="service-text rounded p-5">
                          <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                              <i class="fa fa-users fa-2x" style="color: #3F51B5;"></i>
                          </div>
                          <h5 class="mb-3">Intégration Culturelle</h4>
                          <p class="mb-0">Programmes d'adaptation et activités d'intégration sociale</p>
                      </div>
                      <div class="service-btn rounded-0 rounded-bottom">
                          <a class="text-primary fw-medium" href="">En savoir plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->

  <!-- Project Start -->
  <div class="container-xxl pt-5">
      <div class="container">
          <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
              <p class="fs-5 fw-medium" style="color: #293070;" >Nos Projets Étudiants</p>
              <h1 class="display-5 mb-5">Découvrez les Réalisations de Nos Étudiants</h1>
          </div>
          <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('img/project-1.jpg') }}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-1.jpg') }}" data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                      <a class="d-block h5" href="">Projet d'Intégration Sociale</a>
                      <span>Initiative étudiante pour faciliter l'intégration des nouveaux</span>
                  </div>
              </div>
              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('img/project-2.jpg') }}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-2.jpg') }}" data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                      <a class="d-block h5" href="">Soutien Académique</a>
                      <span>Programme de tutorat par les pairs pour la réussite scolaire</span>
                  </div>
              </div>
              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('img/project-3.jpg') }}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-3.jpg') }}" data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                      <a class="d-block h5" href="">Échanges Culturels</a>
                      <span>Organisation d'événements multiculturels par les étudiants</span>
                  </div>
              </div>
              <div class="project-item mb-5">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('img/project-4.jpg') }}" alt="">
                      <div class="project-overlay">
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-4.jpg') }}" data-lightbox="project"><i class="fa fa-eye"></i></a>
                          <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                      </div>
                  </div>
                  <div class="p-4">
                      <a class="d-block h5" href="">Mentorat Professionnel</a>
                      <span>Accompagnement vers la vie professionnelle</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Project End -->

  <!-- Quote Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <p class="fs-5 fw-medium" style="color: #293070;">Soumettez votre requête</p>
                  <h1 class="display-5 mb-4">Besoin d'aide ? Nous sommes là pour vous écouter !</h1>
                  <p>Notre équipe est à votre disposition pour vous accompagner dans votre parcours académique et répondre à toutes vos préoccupations concernant vos études.</p>
                  <p class="mb-4">Que ce soit pour des questions sur les cours, l'orientation, la vie étudiante ou tout autre sujet, n'hésitez pas à nous contacter.</p>
                  <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                      <span class="btn-lg-square" style="width: 55px; height: 55px; background-color: #293070;">
                          <i class="fa fa-phone-alt text-white"></i>
                      </span>

                      <span class="fs-5 fw-medium mx-4" style="color: #293070;">+243 00 00 00 00</span>
                  </a>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <h2 class="mb-4">Formulaire de contact étudiant</h2>
                  <div class="row g-3">
                      <div class="col-sm-6">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="name" placeholder="Votre Nom">
                              <label for="name">Votre Nom</label>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-floating">
                              <input type="email" class="form-control" id="mail" placeholder="Votre Email">
                              <label for="mail">Votre Email</label>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="mobile" placeholder="Votre Téléphone">
                              <label for="mobile">Votre Téléphone</label>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-floating">
                              <select class="form-select" id="service">
                                  <option selected>Soutien académique</option>
                                  <option value="">Orientation scolaire</option>
                                  <option value="">Vie étudiante</option>
                                  <option value="">Activités parascolaires</option>
                                  <option value="">Bourses et financement</option>
                                  <option value="">Autre demande</option>
                              </select>
                              <label for="service">Type de demande</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Laissez votre message ici" id="message" style="height: 130px"></textarea>
                              <label for="message">Message</label>
                          </div>
                      </div>
                      <div class="col-12 text-center">
                          <button class="btn w-100 py-3" type="submit" style="background-color: #293070; color: white;">Envoyer votre demande</button>
                      </div>                      </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Quote Start -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Notre Comité</p>
            <h1 class="display-5 mb-5">Le Comité Actuel de la REC</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/') }}" alt="">
                    <h5>Levis Muneza</h5>
                    <span class="text-primary">Président</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/') }}" alt="">
                    <h5>Yassine Lahlou</h5>
                    <span class="text-primary">Vice-Président</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/') }}" alt="">
                    <h5>Eugene </h5>
                    <span class="text-primary">Secrétaire Générale</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/') }}" alt="">
                    <h5>Obed Mananga</h5>
                    <span class="text-primary">P.Parole</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Témoignages</p>
            <h1 class="display-5 mb-5">Ce que nos étudiants disent de leur expérience!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                <p class="mb-4">L'association m'a beaucoup aidé dans mon intégration. Les activités organisées m'ont permis de rencontrer d'autres étudiants et de me sentir moins seul.</p>
                <h5>Thomas Diallo</h5>
                <span class="text-primary">Étudiant en Informatique</span>
            </div>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                <p class="mb-4">Grâce à l'association, j'ai pu participer à des événements culturels enrichissants et découvrir la ville. C'est une excellente initiative pour les nouveaux étudiants.</p>
                <h5>Sarah Mbaye</h5>
                <span class="text-primary">Étudiante en Commerce</span>
            </div>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                <p class="mb-4">Les ateliers d'aide aux démarches administratives m'ont été très utiles. L'équipe est toujours disponible pour nous aider et nous conseiller.</p>
                <h5>Ali Hassan</h5>
                <span class="text-primary">Étudiant en Génie Civil</span>
            </div>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-4.jpg') }}" alt="">
                <p class="mb-4">Je suis reconnaissante envers l'association pour son soutien constant. Les activités sociales et culturelles m'ont permis de mieux m'adapter à ma nouvelle vie.</p>
                <h5>Maria Silva</h5>
                <span class="text-primary">Étudiante en Médecine</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-4">Notre Bureau</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kinshasa,Gombe, RDC</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+243 827 355 011</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>recofficiel319@gamil.com</p>
            <div class="d-flex pt-3">
                <a class="btn btn-square btn-light rounded-circle me-2" href="https://x.com/ispt_kin93348/status/1909176965795360903"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61573605884197"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-square btn-light rounded-circle me-2" href="www.linkedin.com/in/rec-officiel-b52b61358"><i class="fab fa-linkedin-in"></i></a>


            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-4">Liens Rapides</h4>
            <a class="btn btn-link" href="">À Propos</a>
            <a class="btn btn-link" href="">Nous Contacter</a>
            <a class="btn btn-link" href="">Nos Services</a>
            <a class="btn btn-link" href="">Conditions Générales</a>
            <a class="btn btn-link" href="">Support</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-4">Heures d'Ouverture</h4>
            <p class="mb-1">Lundi - Vendredi</p>
            <h6 class="text-light">08:00 - 17:00</h6>
            <p class="mb-1">Samedi</p>
            <h6 class="text-light">09:00 - 12:00</h6>
            <p class="mb-1">Dimanche</p>
            <h6 class="text-light">Fermé</h6>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-4">Newsletter</h4>
            <p>Restez informé de nos activités et événements.</p>
            <div class="position-relative w-100">
                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                <button type="button" class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
<div class="container">
  <div class="row">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="fw-medium text-light" href="#">R.E.C</a>, Tous droits réservés..
      </div>
      <div class="col-md-6 text-center text-md-end">
          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed By <a class="fw-medium text-light" href="https://www.facebook.com/isipaofficiel">ISIP'A_KOMORIKO</a>
      </div>
  </div>
</div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


@endsection

