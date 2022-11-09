<x-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif



    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center headtext">Benvenuto su Presto.it</h1>
                </div>
                @auth
                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <div class="nav-item">
                        <a href="{{route('publicAnnouncement')}}"><button class="pubann btn btn-primary">Pubblica un annuncio!</button></a>
                    </div>
                </div>
                @endauth
                @guest
                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <div class="nav-item">
                        <a href="{{route("registerview")}}"><button class="pubann btn btn-primary">Registrati per pubblicare un annuncio!</button></a>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mt-5">I nostri annunci</h2>
        <div class="row">
            @foreach ($announces as $announce)
                <div class="col-12 col-md-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$announce->title}}</h5>
                            <p class="card-text">{{$announce->description}}</p>
                            <p class="card-text">{{$announce->price}}</p>
                            <a href="#" class="btn btn-primary">Dettaglio</a>
                            <a href="#" class="btn btn-success">Categoria: {{$announce->category->name}}</a>
                            <p class="card-footer">Pubblicato il: {{$announce->created_at->format('d/m/Y')}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
