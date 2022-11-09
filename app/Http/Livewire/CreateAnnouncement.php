<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;

class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;


    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:3',
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
        Announce::create([
            'title' =>$this->title,
            'description' =>$this->description,
            'price' =>$this->price,
        ]);

        session()->flash('message', 'Annuncio creato con successo');
        $this->clearForm();
    }

    public function clearForm()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
