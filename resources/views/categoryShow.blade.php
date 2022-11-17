<x-layout>

    <div class="container-fluid p-5 bg-categoryShow shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5 d-flex justify-content-center">
                <h1 class="display-2">{{__('ui.explore')}} : {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse($category->announces as $announce)
                    <div class="card cardCustom">
                        <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top imgcard" alt="...">
                        <div class="card-body">
                            <h5 class="card-title cardTitle">{{$announce->title}}</h5>
                            <p class="card-text cardPrice">{{$announce->price}}$</p>
                            <p class="card-text cardDesc">{{$announce->description}}</p>
                            <a href="{{route("showAnnouncement", compact("announce"))}}" class="btn btnCard cardButt"><span class="buttText">{{__('ui.buttonDet')}}</span></a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="h1">{{__('ui.noAnnounces')}}!</p>
                        <p class="h2">{{__('ui.newAds')}}: <a href="{{route('publicAnnouncement')}}" class="btn btn-success shadow">{{__('ui.buttonNewAds')}}</a></p>
                    </div>
                @endforelse



                </div>
            </div>
        </div>
    </div>


</x-layout>
