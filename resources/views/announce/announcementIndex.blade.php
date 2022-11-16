<x-layout>
<div class="">
    <div class="container-fluid bg-categoryShow pb-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center bg-showCategory">
                <h1 class="text-center ms-3 mt-5">{{__('ui.allAnnounces')}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ">
                    @forelse($announces as $announce)
                        <div class="col-12 col-md-4 d-flex justify-content-around">
                            {{-- <x-card title="{{$announce['title']}}" description="{{$announce['description']}}" price="{{$announce['price']}}" category="{{$announce['category']}}"
                            /> --}}
                            <div class="card cardCustom">
                                <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top imgcard" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title cardTitle">{{$announce->title}}</h5>
                                    <p class="card-text cardPrice">{{$announce->price}}$</p>
                                    <p class="card-text cardDesc">{{$announce->description}}</p>
                                    <a href="{{route("showAnnouncement", compact("announce"))}}" class="btn btnCard cardButt"><span class="buttText">Dettagli</span></a>
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
