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

 <!-- Comment Start -->
 <div class="container mt-5 wow fadeInUp">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-4">Commentaires</h4>
            <!-- Form pour nouveau commentaire -->
            <form action="{{ route('annonce.commentaire', ['annonce'=>$annonce])}}" method="POST">
                @csrf
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="img/LOGO.png" class="rounded-circle me-3" width="40" height="40" alt="User">
                            <div class="flex-grow-1">
                                <textarea id="contenu" name="contenu" class="form-control" rows="3" placeholder="Écrivez un commentaire..." required></textarea>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">Poster</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
         @if ($annonce->commentaires->isEmpty())
        <p class="fw-bold text-center">Aucun commentaire disponible 🥲</p>
        <p class="text-center">	t'as aimé  ! tika commentaire kasi ! 😉</p>
        @else
            <!-- Liste des commentaires -->
            <div class="comments-list">
                <!-- Commentaire 1 -->
                @foreach ($annonce->commentaires as $commentaire )
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="img/LOGO.png" class="rounded-circle me-3" width="40" height="40" alt="User">
                            <div>
                                <h6 class="mb-1"> {{$commentaire->user->name}} </h6>
                                <p class="small text-muted">@formatdate($commentaire->updated_at)</p>
                                <p> {{$commentaire->contenu}} </p>
                                     <div class="d-flex gap-3">
                                    <a href="#" class="text-muted"><i class="far fa-thumbs-up"></i> J'aime</a>
                                    <a href="#" class="text-muted"><i class="far fa-comment"></i> Répondre</a>
                                    <a href="#" class="text-muted"><i class="fas fa-share"></i> Partager</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
