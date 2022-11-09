<x-layout>
    <div class="container-fluid p-5 bg-gradient bg success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Annuncio{{$announce->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="crousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photo/id/27/1200/200" class="img-fluid p-3 rounded" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photo/id/27/1200/200" class="img-fluid p-3 rounded" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photo/id/27/1200/200" class="img-fluid p-3 rounded" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev"></button>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announce->title}}</h5>
                        <p class="card-text">{{$announce->description}}</p>
                        <p class="card-text">{{$announce->price}}</p>
                        <a href="#" class="btn btn-primary">Dettaglio</a>
                        <a href="#" class="btn btn-success">Categoria: {{$announce->category->name}}</a>
                        <p class="card-footer">Pubblicato il: {{$announce->created_at->format('d/m/Y')}} -Autore: {{$announce->user->name ?? ''}}</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</x-layout>