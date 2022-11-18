<x-layout>
    @if($announce_to_check)

    {{-- MIX NON FUNZIONANTE(FIXATOOOOOOOOOOOOOOO) --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 vh-100 d-flex justify-content-end align-items-center">
                <div id="caroselloBelloBello" class="carousel slide detImmagine" data-ride="carousel">
                    @if ($announce_to_check->images)
                    <div class="carousel-inner">
                        @foreach ($announce_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img class="detImmagine" src="{{!$image->get()->isEmpty() ? Storage::url($image->path) : 'https://picsum.photos/200'}}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#caroselloBelloBello" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#caroselloBelloBello" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-3 vh-100 d-flex justify-content-start align-items-center">
                <div class="w-50 detGeneral">
                    <h2 class="detTitle">{{$announce_to_check->title}}</h2>
                    <h2 class="detDesc">{{$announce_to_check->description}}</h2>
                    <h2 class="detPrice">{{$announce_to_check->price}}$</h2>

                    <h2 class="detDesc">{{__('ui.sentIn')}}: {{$announce_to_check->created_at->format('d/m/Y')}}</h2>
                    <div class="d-flex">
                        <form action="{{route('revisor.accept_announce',['announce' => $announce_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button href="" class="accButt" type="submit"><span class="detButtText">{{__('ui.accept')}}</span></button>
                        </form>
                        <form action="{{route('revisor.reject_announce', ['announce'=>$announce_to_check])}}" method="POST" class="ms-3">
                            @csrf
                            @method('PATCH')
                            <button class="refButt" type="submit"><span class="detButtText">{{__('ui.refuses')}}</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 vh-100 tagsCheck text-center">
                {{-- <div class="col-12 col-md-3 border-end tagsWidth">
                    <h5 class="tc-accent mt-3 titoliTags">Tags:</h5>
                    <div class="p-2">
                        @if ($image->image)
                        @foreach($image->labels as $label)
                        <p class="d-inline testoTags">{{$label}},</p>
                        @endforeach
                        @endif
                    </div>
                </div> --}}
                <div class="col-12 col-md-3 tagsWidth">
                    <div class="card-body">
                        <h5 class="tc-accent titoliTags">{{__('ui.imgRevisor')}}</h5>
                        <p>{{__('ui.adult')}}: <span class="{{$image->adult}} testoTags"></span></p>
                        <p>{{__('ui.satire')}}: <span class="{{$image->spoof}} testoTags"></span></p>
                        <p>{{__('ui.medicine')}}: <span class="{{$image->medical}} testoTags"></span></p>
                        <p>{{__('ui.violence')}}: <span class="{{$image->violence}} testoTags"></span></p>
                        <p>{{__('ui.winkingContent')}}: <span class="{{$image->racy}} testoTags"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center vh-100">
                <h1 class="text-center">{{__('ui.noReviewable')}}</h1>
            </div>
        </div>
    </div>


    @endif


</x-layout>
