<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{
    public function publicAnnouncement(){
        $categories=Category::All();
        // compact categories for livewire.create-announcement

        return view('announce.create', compact('categories'));


    }

}
