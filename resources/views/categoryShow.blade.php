<x-layout>

    <div class="container-fluid p-5 bg-categoryShow shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5 d-flex justify-content-center">
                <h1 class="display-2">Esplora la categoria: {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse($category->announces as $announce)
                    <div class="card">
                        <img src="{{!$announce->images()->get()->isEmpty() ? $announce->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="card-img-top imgcard" alt="...">
                        <div class="card-body">
                            <h5 class="card-title cardTitle">{{$announce->title}}</h5>
                            <p class="card-text cardPrice">{{$announce->price}}$</p>
                            <p class="card-text cardDesc">{{$announce->description}}</p>
                            <a href="{{route("showAnnouncement", compact("announce"))}}" class="btn btnCard cardButt"><span class="buttText">Dettagli</span></a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="h1">Non sono presenti annunci per questa categoria!</p>
                        <p class="h2">Pubblicane uno: <a href="{{route('publicAnnouncement')}}" class="btn btn-success shadow">Nuovo annuncio</a></p>
                    </div>
                @endforelse



                </div>
            </div>
        </div>
    </div>


</x-layout>
