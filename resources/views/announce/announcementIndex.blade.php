<x-layout>

    <h1 class="text-center mt-5">Tutti i nostri annunci!</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-around">
                @foreach($announces as $announce)
                <div class="col-12 col-md-6">
                    <x-card>
                        title={{$title['title']}};
                        description={{$description['description']}};
                        price={{$price['price']}};

                     </x-card>
                </div>
                 @endforeach
                {{$announces->links()}}
            </div>
        </div>
    </div>
</div>

</div>


</x-layout>
