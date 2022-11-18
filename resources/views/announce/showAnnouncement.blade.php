<x-layout>

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 col-md-6 vh-100 d-flex justify-content-end align-items-center">
                <div id="caroselloBelloBello" class="carousel slide detImmagine" data-ride="carousel">
                    @if ($announce->images)
                    <div class="carousel-inner">
                        @foreach ($announce->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img class="detImmagine" src="{{!$image->get()->isEmpty() ? Storage::url($image->path) : 'https://picsum.photos/200'}}" alt="">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#caroselloBelloBello" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#caroselloBelloBello" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6 vh-100 d-flex justify-content-start align-items-center">
                <div class="w-50 detGeneral">
                    <h2 class="detTitle">{{$announce->title}}</h2>
                    <h2 class="detDesc">{{$announce->description}}</h2>
                    <br>
                    <h2 class="detDesc"><strong>Categoria:</strong> {{$announce->category->name}}</h2>
                    <h2 class="detPrice">{{$announce->price}}$</h2>
                    <button href="" class="detButt"><span class="detButtText">Acquista Ora!</span></button>
                </div>
            </div>
        </div>
    </div>

</x-layout>
