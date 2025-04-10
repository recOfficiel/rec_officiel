@extends('pages.layout')

@section('title',$annonce->titre)


@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center position-relative">
        <!-- Event Title -->
        <h6 class="section-title text-primary custom-h6 d-inline-block mb-0 wow fadeInUp" data-wow-delay="0.1s">{{ $annonce->categorie ? $annonce->categorie->nom : 'N/A' }}</h6>
        <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.3s"> {{ $annonce->titre}} </h1>
    </div>

    <!-- Author and Date -->
    <div class="text-center">
        <p class="article-meta wow fadeInUp" data-wow-delay="0.4s">@formatdate($annonce->updated_at)</p>
    </div>

    <!-- Image Section -->
    <div class="mb-5 text-center hover-zoom wow fadeInUp" data-wow-delay="0.5s">
        <img src="{{ $annonce->image}}" alt="Logo R.E.C" class="img-fluid rounded shadow-lg img-post" width="500" height="400">
    </div>

    <!-- Content Section -->
    <div class="historique wow fadeInUp" data-wow-delay="0.6s">
        <p>
            {{ $annonce->contenu}}
        </p>
    </div>
</div>

@endsection
