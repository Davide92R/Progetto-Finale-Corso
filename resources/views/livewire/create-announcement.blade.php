<div>
    <div class="pt-5">
        <h2 class="my-5 text-center titoli">Qui pubblicherai l'annuncio</h2>
    
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    
        <form wire:submit.prevent="storeAnnouncement">
            @csrf
            <div class="form-group mt-5">
                <label for="titolo">Titolo</label>
                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" id="titolo" placeholder="Inserisci il titolo">
    
                @error('title')
                        {{$message}}
                @enderror
            </div>
    
            <div class="form-group mt-5">
                <label for="descrizione">Descrizione</label>
                <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="descrizione" rows="3"></textarea>
    
                @error('description')
                        {{$message}}
                @enderror
            </div>
    
            <div class="form-group mt-5">
                <label for="prezzo">Prezzo</label>
                <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror" id="prezzo" placeholder="Inserisci il prezzo">
    
                @error('price')
                        {{$message}}
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="category">Categoria</label>
                <select wire:model.defer="category" id="category" class="form-control">
                    <option value="">Scegli la categoria...</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
    
    
    
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</div>
