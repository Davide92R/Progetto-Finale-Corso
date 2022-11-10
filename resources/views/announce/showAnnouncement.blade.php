<x-layout>
    <div class="container-fluid text-center bg-gradient bg success shadow mt-5">
        <div class="row">
            <div class="col-12 ">
                <h1>Benvenuto nella pagina di dettaglio di : {{$announce->title}}</h1>
            </div>
        </div>
    </div>
    
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
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announce->title}}</h5>
                        <p class="card-text">{{$announce->description}}</p>
                        <p class="card-text">{{$announce->price}}</p>
                        <p class="card-footer">Pubblicato il: {{$announce->created_at->format('d/m/Y')}} -Autore: {{$announce->user->name ?? ''}}</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</x-layout>