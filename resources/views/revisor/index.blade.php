<x-layout>
<div class="container my-5">
    <div class="row">
        <div class="col-12 my-5 mb-0 text-center">
            <h2 class="my-5 mb-0">
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
                    <img src="https://picsum.photos/id/27/1200/201" class=" img-fluid p-3" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/id/27/1200/202" class=" img-fluid p-3" alt="...">
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
                <div class="container my-3 text-center">
                  <div class="row">
                    <h3 class="card-title">Titolo: {{$announce_to_check->title}}</h3>
                    <p class="display-5">Descrizione: {{$announce_to_check->description}}</p>
                    <p class="">Pubblicato il : {{$announce_to_check->created_at->format('d/m/Y')}}</p>

                  </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{route('revisor.accept_announce',['announce' => $announce_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn2 btn-primary">Accetta</button>
            </form>
        </div>
        <div class="col-12 col-md-6 text-end">
            <form action="{{route('revisor.reject_announce', ['announce'=>$announce_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn2 btn-success">Rifiuta</button>
            </form>
        </div>
    </div>


</div>
@endif

</x-layout>