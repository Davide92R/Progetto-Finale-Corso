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
                        <a href="{{route('publicAnnuncement')}}"><button class="pubann btn btn-primary">Pubblica un annuncio!</button></a>
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


        {{-- <p class="text-center pheadtext">i migliori annunci esistenti!</p> --}}
    </div>
</x-layout>
