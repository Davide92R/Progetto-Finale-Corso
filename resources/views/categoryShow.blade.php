<x-layout>

    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Esplora la categoria{{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse($category->announces as $announce)
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
                @empty
                    <div class="col-12">
                        <p class="h1">Non sono presenti annunci per questa categoria!</p>
                        <p class="h2">Pubblicane uno: <a href="{{'announcements.create'}}" class="btn btn-success shadow">Nuovo annuncio</a></p>
                    </div>
                @endforelse
                
                        
                 
                </div>
            </div>
        </div>
    </div>

    
</x-layout>