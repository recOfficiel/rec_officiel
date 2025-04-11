@extends('Pages.layout')

@section('title', 'A propos')

@section('content')

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ asset('img/Actualité.jpg') }}) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">A Propos</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">A Propos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

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


      <!-- History Start -->
      <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                  <p class="fs-5 fw-medium text-primary">Notre Histoire</p>
                  <h1 class="display-5 mb-5">L'Histoire de la REC</h1>
              </div>
              <div class="row g-5 align-items-center">
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                      <img class="img-fluid" src="{{ asset('img/LOGO.png') }}" alt="Histoire REC">
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="h-100">
                          <p class="mb-4">La REC a été fondée avec une vision claire : devenir un leader dans le domaine du conseil et de l'expertise. Depuis notre création, nous avons connu une croissance constante, guidée par nos valeurs d'excellence et d'innovation.</p>
                          <div class="row g-4 mb-4">
                              <div class="col-sm-6">
                                  <div class="d-flex align-items-center">
                                      <i class="fa fa-building flex-shrink-0 me-3 fa-2x" style="color: #4B49AC;"></i>
                                      <h6 class="mb-0">Fondation en 2010</h6>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="d-flex align-items-center">
                                      <i class="fa fa-check-square flex-shrink-0 me-3 fa-2x" style="color: #FFA500;"></i>
                                      <h6 class="mb-0">Plus de 1000 projets réalisés</h6>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-4">Au fil des années, nous avons développé une expertise reconnue dans plusieurs domaines clés, accompagnant nos clients vers le succès avec des solutions innovantes et personnalisées.</p>
                          <div class="border-top mt-4 pt-4">
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-user flex-shrink-0 me-3 fa-2x" style="color: #ff0000;"></i>                                      <h5 class="mb-0">Notre engagement continue pour l'excellence</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- History End -->
                           <!-- Additional History Details Start -->
                           <div class="container-xxl py-5 bg-light">
                               <div class="container">
                                   <div class="row g-5">
                                       <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                           <div class="h-100">
                                               <h3 class="mb-4">Notre Parcours Détaillé</h3>
                                               <p class="mb-4">Depuis sa création en 2010, la REC s'est imposée comme un acteur majeur dans le domaine du conseil et de l'expertise. Notre histoire commence avec un petit groupe d'experts passionnés qui ont décidé de créer une structure capable de répondre aux besoins croissants des entreprises en matière de conseil.</p>

                                               <div class="border-bottom mb-4 pb-4">
                                                   <h5>2010-2015 : Les Débuts</h5>
                                                   <p>Durant ces premières années, nous avons concentré nos efforts sur le développement de notre expertise et la construction d'une base solide de clients fidèles. Cette période a été marquée par des projets innovants qui ont établi notre réputation.</p>
                                               </div>

                                               <div class="border-bottom mb-4 pb-4">
                                                   <h5>2015-2019 : Expansion et Innovation</h5>
                                                   <p>Cette période a vu l'expansion significative de nos services et de notre équipe. Nous avons introduit de nouvelles méthodologies et adopté les dernières technologies pour améliorer nos prestations.</p>
                                               </div>

                                               <div class="mb-4">
                                                   <h5>2020 à aujourd'hui : Leadership et Excellence</h5>
                                                   <p>Ces dernières années ont été marquées par une croissance continue et l'établissement de partenariats stratégiques. Notre engagement envers l'excellence et l'innovation reste au cœur de notre mission, alors que nous continuons à évoluer et à nous adapter aux besoins changeants du marché.</p>
                                               </div>

                                               <div class="row g-4 pt-3">
                                                   <div class="col-sm-4">
                                                       <div class="d-flex align-items-center">
                                                           <i class="fa fa-users flex-shrink-0 me-3 fa-2x" style="color: #E91E63;"></i>
                                                           <h6 class="mb-0">Plus de 100 experts</h6>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="d-flex align-items-center">
                                                           <i class="fa fa-globe flex-shrink-0 me-3 fa-2x" style="color: #009688;"></i>
                                                           <h6 class="mb-0">Présence internationale</h6>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                       <div class="d-flex align-items-center">
                                                           <i class="fa fa-award flex-shrink-0 me-3 fa-2x" style="color: #FF9800;"></i>
                                                           <h6 class="mb-0">Multiples récompenses</h6>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- Additional History Details End -->

                            <!-- Goals Details Start -->
                            <div class="container-xxl py-5">
                                <div class="container">
                                    <div class="row g-5">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="h-100">
                                                <h3 class="mb-4">Nos Objectifs Détaillés</h3>
                                                <p class="mb-4">La REC s'engage à atteindre des objectifs ambitieux qui reflètent notre vision d'excellence et notre engagement envers nos membres et partenaires.</p>

                                                <div class="border-bottom mb-4 pb-4">
                                                    <h5>Excellence Académique</h5>
                                                    <p>Promouvoir et soutenir l'excellence académique à travers des programmes de mentorat, des ateliers et des ressources éducatives de qualité.</p>
                                                </div>

                                                <div class="border-bottom mb-4 pb-4">
                                                    <h5>Développement Professionnel</h5>
                                                    <p>Faciliter l'intégration professionnelle de nos membres en créant des opportunités de stages, d'emplois et de networking avec des entreprises partenaires.</p>
                                                </div>

                                                <div class="border-bottom mb-4 pb-4">
                                                    <h5>Innovation et Recherche</h5>
                                                    <p>Encourager l'innovation et la recherche en organisant des projets collaboratifs et en soutenant les initiatives innovantes de nos membres.</p>
                                                </div>

                                                <div class="mb-4">
                                                    <h5>Impact Social</h5>
                                                    <p>Contribuer positivement à la société à travers des projets communautaires et des initiatives de développement durable.</p>
                                                </div>

                                                <div class="row g-4 pt-3">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa fa-graduation-cap flex-shrink-0 me-3 fa-2x" style="color: #4CAF50;"></i>
                                                            <h6 class="mb-0">Formation continue</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa fa-handshake flex-shrink-0 me-3 fa-2x" style="color: #2196F3;"></i>
                                                            <h6 class="mb-0">Partenariats stratégiques</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa fa-lightbulb flex-shrink-0 me-3 fa-2x" style="color: #FFC107;"></i>
                                                            <h6 class="mb-0">Innovation continue</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa fa-heart flex-shrink-0 me-3 fa-2x" style="color: #E91E63;"></i>
                                                            <h6 class="mb-0">Engagement social</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Goals Details End -->

                            <div class="text-center d-flex justify-content-center">
                                <a href="event.html" class="btn py-3 px-5" style="background-color: #293070; color: white; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#3a4499'" onmouseout="this.style.backgroundColor='#293070'">Nos Événements</a>
                                </div>

                    <!-- Recent Committee Carousel Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                                <p class="fs-5 fw-medium text-primary">Comité Récent</p>
                                <h1 class="display-5 mb-5">Notre Équipe de Direction</h1>
                            </div>

                            <div id="committeeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row g-4">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="team-item rounded overflow-hidden pb-4">

                                                    <img class="img-fluid mb-4" src="{{ asset('img/committee/president.jpg') }}" alt="Président">
                                                    <h5>Levis Muneza</h5>
                                                    <span class="text-primary">Président</span>
                                                    <ul class="team-social">
                                                        <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="team-item rounded overflow-hidden pb-4">
                                                    <img class="img-fluid mb-4" src="{{ asset('img/committee/vice-president.jpg') }}" alt="Vice-Président">
                                                    <h5>Yassine Lahlou</h5>
                                                    <span class="text-primary">Vice-Président</span>
                                                    <ul class="team-social">
                                                        <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="team-item rounded overflow-hidden pb-4">
                                                    <img class="img-fluid mb-4" src="{{ asset('img/committee/secretaire.jpg') }}" alt="Secrétaire Général">
                                                    <h5>Eugene</h5>
                                                    <span class="text-primary">Secrétaire Général</span>
                                                    <ul class="team-social">
                                                        <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="team-item rounded overflow-hidden pb-4">
                                                    <img class="img-fluid mb-4" src="{{ asset('img/committee/tresorier.jpg') }}" alt="Trésorier">
                                                    <h5>John Doe</h5>
                                                    <span class="text-primary">Trésorier</span>
                                                    <ul class="team-social">
                                                        <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more carousel items for past committees if needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Committee Carousel End -->
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
                    <img class="img-fluid mb-4" src="{{ asset('img/committee/president.jpg') }}" alt="">
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
                    <img class="img-fluid mb-4" src="{{ asset('img/committee/vice-president.jpg') }}" alt="">
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
                    <img class="img-fluid mb-4" src="{{ asset('img/committee/secretaire.jpg') }}" alt="">
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
                    <img class="img-fluid mb-4" src="{{ asset('img/committee/p-parole.jpg') }}" alt="">
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

@endsection
