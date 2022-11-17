<div class="">
    <div class="createForm">
        <h2 class="text-center createTitle mt-5">{{__('ui.publish')}}</h2>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="storeAnnouncement">
            @csrf
            <div class="form-group mt-5">
                <label for="titolo">{{__('ui.title')}}</label>
                <input wire:model="title" type="text" class="createInput form-control @error('title') is-invalid @enderror" id="titolo" placeholder="{{__('ui.title2')}}">

                @error('title')
                        {{$message}}
                @enderror
            </div>

            <div class="form-group mt-5">
                <label for="descrizione">{{__('ui.description')}}</label>
                <textarea wire:model="description" class="createInput form-control @error('description') is-invalid @enderror" id="descrizione" rows="3"></textarea>

                @error('description')
                        {{$message}}
                @enderror
            </div>

            <div class="form-group mt-5">
                <label for="prezzo">{{__('ui.price')}}</label>
                <input wire:model="price" type="number" class="createInput form-control @error('price') is-invalid @enderror" id="prezzo" placeholder="{{__('ui.price2')}}">

                @error('price')
                        {{$message}}
                @enderror
            </div>

            <div class="mb-3">
                <label for="category">{{__('ui.category')}}</label>
                <select wire:model.defer="category" id="category" class="createInput form-control">
                    <option value="">{{__('ui.category2')}}...</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input wire:model="temporary_images" type="file" name="images" multiple class="createInput form-control shadow @error('temporary_images.*') is-invalid @enderror"
                placeholder="Img"/>
                @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>
                @enderror
            </div>

         @if(!empty($images))
             <div class="row">
                 <div class="col-12 ">
                   <p>Photo preview:</p>
                   <div class="row border border-4 border info rounded shadow py-4 ">
                     @foreach($images as $key => $image)
                       <div class="col my-3">
                               <div class= "img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}}); background-position: center; background-size:cover"></div>
                          <button type="button" class="btn btn danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                       </div>
                     @endforeach
                   </div>
                </div>
             </div>
         @endif



            <button class="btn loginRegisterButton" type="submit"><span class="loginRegisterTextButt">{{__('ui.send')}}</span></button>
        </form>
    </div>
</div>
