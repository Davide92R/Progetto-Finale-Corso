<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announce_to_check = Announce::where('is_accepted', null)->first();
        return view('revisor.index', compact('announce_to_check'));
    }
    public function acceptAnnounce(Announce $announce){
        $announce ->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato');
    }
    public function rejectAnnounce(Announce $announce){
        $announce ->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato');
    }
}