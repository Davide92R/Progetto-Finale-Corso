<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:3',
        'category' => 'required|min:3',
        'price' => 'required|numeric',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute deve avere almeno :min caratteri',
        'numeric' => 'Il campo :attribute deve essere un numero',
    ];

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
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
