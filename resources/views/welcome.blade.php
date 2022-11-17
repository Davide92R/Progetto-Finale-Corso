<x-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<!-- Start Section 1 header -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1 class="headerTypewriting">{{__('ui.welcome')}}<span clsas="d-block Monserrat"> Presto.it</span></h1>
                    <p class="subtitle">{{__('ui.subtitle')}}!</p>
                    <p class="mb-5">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                </div>
                @auth
                <div class="col-12  mt-4">
                    <div class="nav-item">
                        <a href="{{route('publicAnnouncement')}}"><button class="btn headButt"><span class="footerTitle White">Pubblica un annuncio!</span></button></a>
                    </div>
                </div>
                @endauth
                @guest
                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <div class="nav-item">
                        <a href="{{route("registerview")}}"><button class="btn btnCard headButt btn-primary">{{__('ui.postAnnuonce')}}</button></a>
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
                    {{-- <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem; height: 32rem; text-start">
                            <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">

                            <div class="card-body general">
                                <h5 class="card-title nomeCard">{{$announce->title}}</h5>
                                <h2 class="prezzo"><i class="fa-solid fa-money-bill-wave"></i> {{$announce->price}}€</h2>
                                <p class="card-text luogoCard">Palermo(PA)</p>
                            </div>

                            <div class="card-body category">
                                <hr class="solid">
                                <h4 class="card-title"><i class="fa-solid fa-house-chimney-window"></i>{{$announce->category->name}}</h4>
                                <hr class="solid">
                            </div>

                            <div class="card-body button">
                                <a href="{{route("showAnnouncement", compact("announce"))}}"><button class="button-24" role="button">Dettaglio</button></a>
                            </div>
                        </div>
                    </div> --}}

                    <div class="card cardCustom">
                        <img src="{{!$announce->images()->get()->isEmpty() ? $announce->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200'}}" class="img-fluid" alt="...">
                        {{-- <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()-> : 'https://picsum.photos/200'}}" class="card-img-top imgcard" alt="..."> --}}
                        <div class="card-body">
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis reprehenderit repellendus hic placeat atque ab voluptas pariatur debitis autem consequatur, aliquid officiis fugit fugiat aspernatur sit iure, dolore nisi illum!</p>
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
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
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
                <h2 class="section-title mb-4">{{__('ui.born')}} Presto.it?</h2>
                <p class="mb-5">Il nostro scopo è connettere le <strong>persone!</strong> <br>Puntiamo a rendere la compravendita di <strong>Resell</strong> il più facile possibile, sia per il <strong>venditore</strong>, che per <strong>l'acquirente!</strong> <br>Che altro dirvi? Ci vediamo "<strong>Presto!</strong>"</p>
                {{-- <p><a herf="#" class="btn">Esplora</a></p> --}}
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
{{-- <div class="popular-product">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="images/product-1.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Nordic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="images/product-2.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Kruzo Aero Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="images/product-3.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Ergonomic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
<!-- End Popular Product -->

<!-- Start Testimonial Slider -->
{{-- <div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Testimonial Slider -->

<!-- Start Blog Section -->
{{-- <div class="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">Recent Blog</h2>
            </div>
            <div class="col-md-6 text-start text-md-end">
                <a href="#" class="more">View All Posts</a>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">First Time Home Owner Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
<!-- End Blog Section -->

<!-- Start Footer Section -->

<!-- End Footer Section -->


</x-layout>
