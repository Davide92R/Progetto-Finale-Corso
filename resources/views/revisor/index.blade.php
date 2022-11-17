<x-layout>
  @if($announce_to_check)
    {{-- <div class="container">
      <div class="row ">
        <div class="col-12">

          <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
              @if ($announce_to_check->images)
                <div class="carousel-inner ">
                  @foreach ($announce_to_check->images as $image)
                      <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{!$image->get()->isEmpty() ? Storage::url($image->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top imgcard vh-100" alt="...">
                      </div>
                  @endforeach
                </div>
              @else
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/27/1200/400"  class=" img-fluid p-3" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/id/27/1200/400" class=" img-fluid p-3" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/id/27/1200/400" class=" img-fluid p-3" alt="...">
                    </div>
                  </div>
              @endif
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
                <div class="container my-3 text-center">
                  <div class="row">
                    <h3 class="card-title">Titolo: {{$announce_to_check->title}}</h3>
                    <p class="display-5">Descrizione: {{$announce_to_check->description}}</p>
                    <p class="">Pubblicato il : {{$announce_to_check->created_at->format('d/m/Y')}}</p>

                  </div>
                </div>
        </div>
    </div>
    <div class="p-2">
      <div class="col-12 col-md-6">
        <img src="{{$image->getUrl(400,300)}}" class="img-fluid p-3 rounded"alt="">
      </div>
    </div>
    <div class="col-md-3 border-end">
      <h5 class="tc-accent mt-3">Tags</h5>
      <div class="p-2">
        @if ($image->image)
          @foreach($image->labels as $label)
            <p class="d-inline">{{$label}},</p>
          @endforeach
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-body">
        <h5 class="tc-accent">Revisione Immagini</h5>
          <p>Adulti: <span class="{{$image->adult}}"></span></p>
          <p>Satira: <span class="{{$image->spoof}}"></span></p>
          <p>Medicina: <span class="{{$image->medical}}"></span></p>
          <p>Violenza: <span class="{{$image->violence}}"></span></p>
          <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
      </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{route('revisor.accept_announce',['announce' => $announce_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn2 btn-primary">Accetta</button>
            </form>
        </div>
        <div class="col-12 col-md-6 text-end">
            <form action="{{route('revisor.reject_announce', ['announce'=>$announce_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn2 btn-success">Rifiuta</button>
            </form>
        </div>
    </div>


  </div> --}}


    @if ($announce_to_check->images)
        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12 col-md-6 vh-100 d-flex justify-content-end align-items-center">
                    <img class="detImmagine" src="{{!$announce_to_check->images()->get()->isEmpty() ? Storage::url($announce_to_check->images()->first()->path) : 'https://picsum.photos/200'}}" alt="">
                </div>
                <div class="col-12 col-md-6 vh-100 d-flex justify-content-start align-items-center">
                    <div class="w-50 detGeneral">
                        <h2 class="detTitle">{{$announce_to_check->title}}</h2>
                        <h2 class="detDesc">{{$announce_to_check->description}}</h2>
                        <h2 class="detPrice">{{$announce_to_check->price}}$</h2>

                        <h2 class="detDesc">Inviato il: {{$announce_to_check->created_at->format('d/m/Y')}}</h2>

                        <div class="d-flex">
                            <form action="{{route('revisor.accept_announce',['announce' => $announce_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button href="" class="accButt" type="submit"><span class="detButtText">Accetta</span></button>
                            </form>
                            <form action="{{route('revisor.reject_announce', ['announce'=>$announce_to_check])}}" method="POST" class="ms-3">
                                @csrf
                                @method('PATCH')
                                <button class="refButt" type="submit"><span class="detButtText">Rifiuta</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@else
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center vh-100">
                <h1 class="text-center">Non ci sono Annunci da revisionare</h1>
            </div>
        </div>
    </div>


@endif


</x-layout>
