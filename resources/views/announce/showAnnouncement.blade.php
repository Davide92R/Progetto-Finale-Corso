<x-layout>

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 col-md-6 vh-100 d-flex justify-content-end align-items-center">
                <img class="detImmagine" src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200'}}" alt="">
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
