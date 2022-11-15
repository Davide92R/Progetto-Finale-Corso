<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];

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
        'temporary_images.required'  => 'l immagine è richiesta',
        'temporary_images.*.image'  => 'i file devono essere immagini',
        
    ];

    public function UpdatedTemporaryImages(){
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

    public function store(){
        $this->validate();
        
        $this->announce=Category::find($this->category)->announces()->create($this->validate());
        if(count($this->images)){
            foreach($this->images as $image){
                $this->announce->images()->create(['path'=>$image->store('images','public')]);
            }
        }
        session()->flash('message','Articolo inserito con successo,sarà pubblicato dopo la revisione');
        $this->cleanForm();

    }

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
