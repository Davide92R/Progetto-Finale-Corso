<x-layout>
    <div class="container-fluid text-center bg-gradient bg success shadow mt-5">
        <div class="row">
            <div class="col-12 mt-4">
                <h1>Benvenuto nella pagina di dettaglio di : {{$announce->title}}</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
            </div>
            <div class="col-12 col-md-6 ml-5">
                <h1>{{$announce->title}}</h1>
                <p>{{$announce->description}}</p>
                <p>{{$announce->price}} <span>€</span></p>
                <a href="" class="btn btn-success mb-2">Categoria: {{$announce->category->name}}</a>
                <p class="card-footer">Pubblicato il: {{$announce->created_at->format('d/m/Y')}}</p>
                <p class="card-footer">-Autore: {{$announce->user->name ?? ''}}</p>
            </div>
        </div>
    </div>
</x-layout>
