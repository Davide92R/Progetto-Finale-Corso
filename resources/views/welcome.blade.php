<x-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="text-center">
        @if (Auth::check())
            <h1 class="text-center">Ciao</h1>
            <h2>Benvenuto: {{Auth::user()->name}}</h2>
        @else
            <h2>Uajoooooo a da registr!</h2>
        @endif
    </div>
       
    

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="nav-item">
                        <button type="button" href="{{route('publicAnnuncement')}}" class="btn btn-primary">pubblica annuncio</button>
                    </div> 

                </div>
                <div class="col-12 ">
                    <h1 class="text-center headtext">Benvenuto su Presto.it</h1>

                </div>
                

            </div>
        </div>
       
        
        {{-- <p class="text-center pheadtext">i migliori annunci esistenti!</p> --}}
    </div>
</x-layout>
