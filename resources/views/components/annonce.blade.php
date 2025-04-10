@forelse ($annonces as $annonce )

<div class="col-lg-4 col-12 mb-4 wow fadeInUp animate__animated animate__bounce" data-wow-delay="0.1s">
    <div class="card border-0 shadow-lg h-100 hover-shadow">
      <div class="product-thumb position-relative overflow-hidden">
        <a href="{{ route('annonce.show', ['annonce'=>$annonce]) }}" class="hover-zoom">
          <img src="{{ $annonce->image}}" class="img-fluid product-image" alt="actu" width="1232" height="816">
        </a>
      </div>
      <div class="product-info p-4">
        <div class="card-body">
          <div class="d-flex justify-content-between mb-2">
            <small class="text-muted"> @formatdate($annonce->updated_at) </small>
            <small class="text-danger"><a href="" class="">{{ $annonce->categorie ? $annonce->categorie->nom : 'N/A' }}</a></small>
          </div>
          <h5 class="product-title">
            <a href="{{ route('annonce.show', ['annonce'=>$annonce]) }}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                {{ $annonce->titre }}
            </a>
          </h5>
          <a href="{{ route('annonce.show', ['annonce'=>$annonce]) }}">
            <p class="text-muted">
            @limit($annonce->contenu)
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>

@empty
    <p class="fw-bold text-center">Aucune annonce disponible 🥲</p>
    <p class="text-center">	beta tour ! 😉</p>
@endforelse
