<x-layout>
<div class="my-5 pt-3">
    <h1 class="text-center mt-5">Tutti i nostri annunci!</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ">
                    @forelse($announces as $announce)
                        <div class="col-12 col-md-4 d-flex justify-content-around">
                            {{-- <x-card title="{{$announce['title']}}" description="{{$announce['description']}}" price="{{$announce['price']}}" category="{{$announce['category']}}"
                            /> --}}
                            <div class="card shadow mb-3" style="width: 18rem;">
                                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$announce->title}}</h5>
                                    <p class="card-text">{{$announce->description}}</p>
                                    <p class="card-text">{{$announce->price}} <span>€</span></p>
                                    <a href="{{route('showAnnouncement', compact('announce'))}}" class="btn btn-primary mb-2">Dettaglio</a>
                                    <a href="#" class="btn btn-success mb-2">Categoria: {{$announce->category->name}}</a>
                                    <p class="card-footer">Pubblicato il: {{$announce->created_at->format('d/m/Y')}} -Autore: {{$announce->user->name ?? ''}}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-warning py-3 shadow">
                                <p class="lead">Non ci sono annunci per questa ricerca! Fanne un'altra</p>
                            </div>
                        </div>
                    @endforelse
                    {{$announces->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


</x-layout>
