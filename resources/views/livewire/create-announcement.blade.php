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
                <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror"
                placeholder="Img"/>
                @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>
                @enderror
            </div>@if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Photo preview</p>
                    <div class="row border border-4 border info rounded shadow py-4">
                        @foreach ($images as $key => $image)
                        <div class="col my-3">
                            <div class= "img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                            <button type="button" class="btn btn danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                        </div>
                        @endforeach
                    </div>
                </div>
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
