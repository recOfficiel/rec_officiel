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
 <!-- Recherche Start -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <form method="GET" action="{{ route('annonce') }}">
                <div class="input-group">
                    <input type="search" id="recherche" name="recherche" class="form-control"
                           placeholder="Rechercher une actualité..." aria-label="Rechercher"
                           value="{{ request('recherche') }}">
                    <button class="btn" type="submit" style="background-color: #3C3882; color: white;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Recherche End -->

 <!--recherhce end -->
 <!-- Actualités Start -->
 <section class="products section-padding position-relative">
    <div class="container">
      <div class="row">
        <!-- Start of Post -->
       <x-annonce :annonces="$annonces"></x-annonce>
                <!-- End of Post -->

      </div>
    </div>
    <!-- Start of Pagination -->
    {{  $annonces->links('pagination::bootstrap-5') }}

  </section>
<!-- actu end -->


@endsection
