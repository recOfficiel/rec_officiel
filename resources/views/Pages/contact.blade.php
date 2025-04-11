@extends('Pages.layout')

@section('title', 'Contact')

@section('content')


 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ asset('img/Actualité.jpg')}}) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Accueil/</li>
                <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
              <p class="fs-5 fw-medium" style="color: #293070;">Contactez-nous</p>
              <h1 class="display-5 mb-5">Si vous avez des questions, n'hésitez pas à nous contacter</h1>
          </div>
          <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <h3 class="mb-4">Envoyez-nous un message</h3>
                  <p class="mb-4">Nous sommes là pour répondre à toutes vos questions concernant la REC. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                  <form>
                      <div class="row g-3">
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="name" placeholder="Votre Nom">
                                  <label for="name">Votre Nom</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input type="email" class="form-control" id="email" placeholder="Votre Email">
                                  <label for="email">Votre Email</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="subject" placeholder="Sujet">
                                  <label for="subject">Sujet</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-floating">
                                  <textarea class="form-control" placeholder="Laissez votre message ici" id="message" style="height: 200px"></textarea>
                                  <label for="message">Message</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <button class="btn rounded-pill py-3 px-5" type="submit" style="background-color: #293070; color: white;">Envoyer le message</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <h3 class="mb-4">Coordonnées</h3>
                  <div class="d-flex border-bottom pb-3 mb-3">
                      <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: #293070;">
                          <i class="fa fa-map-marker-alt text-white"></i>
                      </div>
                      <div class="ms-3">
                          <h6>Notre Bureau</h6>
                          <span>Kinshasa</span>
                      </div>
                  </div>
                  <div class="d-flex border-bottom pb-3 mb-3">
                      <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: #293070;">
                          <i class="fa fa-phone-alt text-white"></i>
                      </div>
                      <div class="ms-3">
                          <h6>Appelez-nous</h6>
                          <span>+243 827 355 011</span>
                      </div>
                  </div>
                  <div class="d-flex border-bottom-0 pb-3 mb-3">
                      <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: #293070;">
                          <i class="fa fa-envelope text-white"></i>
                      </div>
                      <div class="ms-3">
                          <h6>Envoyez-nous un email</h6>
                          <span>recofficiel319@gmail.com</span>
                      </div>
                  </div>

                  <iframe class="w-100 rounded"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.574375340138!2d-2.7594826842089584!3d47.656561179187454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1e45bf9d89%3A0xf1b4ec0fcc4d768d!2sFacult%C3%A9%20de%20Sciences%20et%20Sciences%20de%20l'Ing%C3%A9nieur!5e0!3m2!1sfr!2sfr!4v1637157463554!5m2!1sfr!2sfr"
                  frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                  tabindex="0"></iframe>
              </div>
          </div>
      </div>
  </div>
  <!-- Contact End -->

@endsection