<div>
    <x-layout>    <h2 class="mt-5 text-center titoli">qui pubblicherai l'annuncio</h2>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('storeAnnuncement')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="titolo">Titolo</label>
                        <input type="text" class="form-control" id="titolo" name="title" placeholder="Inserisci il titolo">
                    </div>

                    <div class="form-group mt-5">
                        <label for="descrizione">Descrizione</label>
                        <textarea class="form-control" id="descrizione" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group mt-5">
                        <label for="prezzo">Prezzo</label>
                        <input type="number" class="form-control" id="prezzo" name="price" placeholder="Inserisci il prezzo">
                    </div>

                    <div class="form-group mt-5">
                        <label for="immagine">Immagine</label>
                        <input type="file" class="form-control" id="immagine" name="image">
                    </div>

                    <div class="form-group mt-5">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" id="categoria" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>


</div>
