<x-layout>

    <h1 class="text-center mt-5">Tutti i nostri annunci!</h1>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-12">
                <div class="row justify-content-around">
                    @foreach($announces as $announce)
                    <div class="card shadow mt-4" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top mt-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$announce->title}}</h5>
                            <p class="card-text">{{$announce->description}}</p>
                            <p class="card-text">{{$announce->price}}</p>
                            <a href="{{route('showAnnouncement', compact('announce'))}}" class="btn btn-primary mb-2">Dettaglio</a>
                            <a href="#" class="btn btn-success mb-2">Categoria: {{$announce->category->name}}</a>
                            <p class="card-footer">Pubblicato il: {{$announce->created_at->format('d/m/Y')}} -Autore: {{$announce->user->name ?? ''}}</p>
                        </div>
                    </div>

                    @endforeach
                    {{$announces->links()}}
                </div>
            </div>
        </div>
    </div>

</x-layout>
