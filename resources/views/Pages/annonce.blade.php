@extends('Pages.layout')

@section('title', 'Annonces')

@section('content')

  <!-- actu Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/Actualité.jpg) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Actualités et Événements</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="about.html">A-propos</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Actualités</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Header End -->
  <!-- recherche Start -->
 <div class="container mb-5">
     <div class="row justify-content-center">
         <div class="col-12 col-md-8 col-lg-6">
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="Rechercher une actualité..." aria-label="Rechercher">
                 <button class="btn" type="button" style="background-color: #3C3882; color: white;">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </div>
 </div>
 <!--recherhce end -->
 <!-- Actualités Start -->
 <section class="products section-padding position-relative">
    <div class="container">
      <div class="row">
        <!-- Start of Post -->
        <div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
          <div class="card border-0 shadow-lg h-100 hover-shadow">
            <div class="product-thumb position-relative overflow-hidden">
              <a href="show.html" class="hover-zoom">
                <img src="img/LOGO.png" class="img-fluid product-image" alt="actu" width="1232" height="816">
              </a>
            </div>
            <div class="product-info p-4">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <small class="text-muted">27 Novembre 2024</small>
                  <small class="text-danger"><a href="#" class="">Événement</a></small>
                </div>
                <h5 class="product-title">
                  <a href="show.html" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                    Lancement du programme REC
                  </a>
                </h5>
                <a href="show.html">
                  <p class="text-muted">
                    La REC lance officiellement son programme d'accompagnement des étudiants congolais pour faciliter leur intégration professionnelle...
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Post -->
        <div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="show.html" class="hover-zoom">
                  <img src="img/LOGO.png" class="img-fluid product-image custom-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted">26 Novembre 2024</small>
                    <small class="text-danger"><a href="#" class="">Info</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                     Partenariat avec les universités
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        La REC signe des conventions avec plusieurs universités congolaises pour faciliter l'accès aux stages et à l'emploi...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="show.html" class="hover-zoom">
                  <img src="img/LOGO.png" class="img-fluid product-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted">25 Novembre 2024</small>
                    <small class="text-danger"><a href="#" class="">Formation</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                        Ateliers de développement professionnel
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        La REC organise des ateliers de formation sur la rédaction de CV, la préparation aux entretiens et le développement personnel...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="show.html" class="hover-zoom">
                  <img src="img/LOGO.png" class="img-fluid product-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted">2 Novembre 2024</small>
                    <small class="text-danger"><a href="#" class="">Mentorat</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                     Programme de mentorat REC
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Lancement du programme de mentorat connectant les étudiants avec des professionnels expérimentés dans leur domaine...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="show.html" class="hover-zoom">
                  <img src="img/LOGO.png" class="img-fluid product-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted">28 Octobre 2024</small>
                    <small class="text-danger"><a href="#" class="">Innovation</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                      Plateforme numérique REC
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        La REC lance sa plateforme numérique pour faciliter la mise en relation entre étudiants et entreprises...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="show.html" class="hover-zoom">
                  <img src="img/LOGO.png" class="img-fluid product-image" alt="actu" width="1232" height="816">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted">3 Octobre 2024</small>
                    <small class="text-danger"><a href="#" class="">Réussite</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                        Premier succès du programme REC
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Célébration des premiers étudiants ayant trouvé un emploi grâce au programme d'accompagnement de la REC...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <!-- Repeat the block above for other posts -->
      </div>
    </div>
  </section>
<!-- actu end -->
   

@endsection
