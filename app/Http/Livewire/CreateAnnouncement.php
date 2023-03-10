<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\AddWatermark;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;



class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];
    public $image;
    // public $form_id;
    public $announce;

    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:3',
        'category' => 'required|min:3',
        'price' => 'required|numeric',
        'images.*'=> 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute deve avere almeno :min caratteri',
        'numeric' => 'Il campo :attribute deve essere un numero',
        'temporary_images.required'  => 'L\ immagine è richiesta',
        'temporary_images.*.image'  => 'I file devono essere immagini',
        'temporary_images.*.max'  => 'L\immagine deve essere al massimo di 1mb ',
        'images.image'  => 'L\immagine deve essere un\immagine',
        'images.max' => 'L\immagine deve essere massimo di 1mb',

    ];

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    // public function store(){
    //     $this->validate();
        
    //     $this->announce = Category::find($this->category)->announces()->create($this->validate());
    //     $this->announce->user()->associate(Auth::user());
    //     $this->announce->save();

       

    //     session()->flash('message','Articolo inserito con successo, sarà pubblicato dopo la revisione');
    //     $this->clearForm();

    // }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeAnnouncement()
    {
        $category = Category::find($this->category);

       $announce = $category->announces()->create([ 
                'title' =>$this->title,
                'description' =>$this->description,
                'price' =>$this->price,
            ]);
        Auth::user()->announces()->save($announce);

        if(count($this->images)){
            foreach($this->images as $image){
                    // $announce->images()->create(['path'=>$image->store('images','public')]);
                    $newFilename="announces/{$announce->id}";
                    $newImage=$announce->images()->create(['path'=>$image->store($newFilename,'public')]);

                    RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400 , 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    new AddWatermark($newImage->id), 
                    ])->dispatch($newImage->id);

            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('message', 'Annuncio creato con successo');
        $this->clearForm();
    }

    public function clearForm()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->image = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
