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
    public function showAnnouncement(Announce $announce){
      
        return view('announce.showAnnouncement',compact('announce'));
    }
    public function announcementIndex(){
         
        $announces=Announce::paginate(5);
        return view('announce.announcementIndex',compact('announces'));
    }

}
