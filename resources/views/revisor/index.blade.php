<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2>
                {{$announce_to_check ? "Ecco l'annuncio da revisionare" : "Non ci sono annunci da revisionare."}}
            </h2>
        </div>
    </div>
</div>

@if($announce_to_check)
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://picsum.photos/id/27/1200/200"  class=" img-fluid p-3" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/id/27/1200/200" class=" img-fluid p-3" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/id/27/1200/200" class=" img-fluid p-3" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
                <div class="container">
                  <div class="row">
                    <h5 class="card-title">Titolo: {{$announce_to_check->title}}</h5>
                    <p class="card-text">Descrizione: {{$announce_to_check->description}}</p>
                    <p class="card-footer">Pubblicato il : {{$announce_to_check->created_at->format('d/m/Y')}}</p>

                  </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{route('revisor.accept_announce',['announce' => $announce_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow">Accetta</button>
            </form>
        </div>
        <div class="col-12 col-md-6 text-end">
            <form action="{{route('revisor.reject_announce', ['announce'=>$announce_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
            </form>
        </div>
    </div>


</div>
@endif

</x-layout>