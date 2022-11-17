<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announce;
use Illuminate\Http\Request;
use App\Mail\BecomeRevisorMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announce_to_check = Announce::where('is_accepted', null)->first();
        return view('revisor.index', compact('announce_to_check'));
    }
    public function acceptAnnounce(Announce $announce){
        $announce ->setAccepted(true);
        return redirect()->back()->with('success', 'Annuncio accettato');
    }
    public function rejectAnnounce(Announce $announce){
        $announce ->setAccepted(false);
        return redirect()->back()->with('success', 'Annuncio rifiutato');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisorMail(Auth::user()));
        return redirect()->back()->with('success', 'Richiesta inviata');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', [
            "email" => $user->email
        ]);
        return redirect()->back()->with('success', 'Utente promosso a revisore');
    }
}
