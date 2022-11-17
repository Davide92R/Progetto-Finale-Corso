<x-layout>
<!-- Start Section 1 header -->
<div class="hero">
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1 class="headerTypewriting">{{__('ui.welcome')}}<span clsas="d-block Monserrat"> Presto.it</span></h1>
                    <p class="subtitle">{{__('ui.subtitle')}}!</p>
                    <p class="mb-5">{{__('ui.postAnnounce3')}}!</p>
                </div>
                @auth
                <div class="col-12  mt-4">
                    <div class="nav-item">
                        <a href="{{route('publicAnnouncement')}}"><button class="btn headButt"><span class="footerTitle White">{{__('ui.postAnnounce2')}}!</span></button></a>
                    </div>
                </div>
                @endauth
                @guest
                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <div class="nav-item">
                        <a href="{{route("registerview")}}"><button class="btn headButt"><span class="White footerTitle">{{__('ui.postAnnuonce')}}</span></button></a>
                    </div>
                </div>
                @endguest
            </div>
            <div class="col-lg-7">

                <div data-aos="fade-up-right" class="hero-img-wrap">
                    <img src="images/header.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Section 1 header  -->

{{-- start i nostri annunci --}}

    <div class="container text-center">
        <p class="h2 my-2 fw-bold ">{{__('ui.allAnnounces')}}</p>
        <div class="row justify-content-around">
            {{-- mostra 5 articoli --}}
            @foreach($announces as $announce)
                @if ($announce->is_accepted == 1)

                    <div class="card cardCustom">
                        <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top imgcard" alt="...">                        <div class="card-body">
                            <h5 class="card-title cardTitle">{{$announce->title}}</h5>
                            <p class="card-text cardPrice">{{$announce->price}}$</p>
                            <p class="card-text cardDesc">{{$announce->description}}</p>
                            <a href="{{route("showAnnouncement", compact("announce"))}}" class="btn btnCard cardButt"><span class="buttText">{{__('ui.buttonDet')}}</span></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

{{-- end i nostri annunci --}}

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div data-aos="fade-right" class="col-lg-6">
                <h2 class="section-title">{{__('ui.why')}}</h2>
                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

                <div  class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <lord-icon
                            src="https://cdn.lordicon.com/iejknaed.json"
                            trigger="hover"
                            colors="outline:#121331,primary:#545454,secondary:#66a1ee,tertiary:#ee6d66,quaternary:#646e78"
                            style="width:75px;height:75px">
                        </lord-icon>
                            <h3>{{__('ui.shipping')}}</h3>
                            <p>...{{__('ui.shipping2')}}</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <lord-icon
                            src="https://cdn.lordicon.com/cllunfud.json"
                            trigger="hover"
                            colors="outline:#121331,primary:#66a1ee,secondary:#ee6d66"
                            style="width:75px;height:75px">
                        </lord-icon>
                            <h3>{{__('ui.purchase')}}</h3>
                            <p>{{__('ui.purchase2')}}!</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <lord-icon
                            src="https://cdn.lordicon.com/bjnaomnr.json"
                            trigger="hover"
                            colors="outline:#121331,primary:#ee6d66,secondary:#545454,tertiary:#9cc2f4"
                            style="width:75px;height:75px">
                        </lord-icon>
                            <h3>{{__('ui.support')}}</h3>
                            <p>{{__('ui.support2')}}</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <lord-icon
                            src="https://cdn.lordicon.com/siuqqewt.json"
                            trigger="hover"
                            colors="primary:#121331,secondary:#4bb3fd,tertiary:#ffc738,quaternary:#ebe6ef,quinary:#646e78,senary:#ee6d66"
                            style="width:75px;height:75px">
                        </lord-icon>
                            <h3>{{__('ui.payment')}}</h3>
                            <p>{{__('ui.payment2')}}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div data-aos="fade-left" class="col-lg-5">
                <div class="img-wrap">
                    <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div data-aos="fade-up-right"  class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                    <div data-aos="fade-down-left" class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                    <div data-aos="fade-up-right" class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                </div>
            </div>
            <div data-aos="fade-up-right" class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">{{__('ui.born')}} ?</h2>
                <p class="mb-5">{{__('ui.bornParagraph')}}</p>
            </div>
        </div>
    </div>
</div>
</x-layout>
