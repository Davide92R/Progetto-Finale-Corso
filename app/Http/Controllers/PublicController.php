<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PublicController extends Controller
{
    public function welcome(){
        $announces=Announce::get()->sortByDesc('created_at')->take(3);
        $announces=Announce::paginate(5);
        return view('welcome', compact('announces'));
    }
    public function registerview(){
        return view('auth.register');
    }
    public function loginview(){
        return view('auth.login');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('publicAnnouncement')->with('success', 'Ti sei registrato con successo!');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('publicAnnouncement')->with('success', 'Hai loggato con successo!');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome')->with('success', 'Hai sloggato correttamente!');
    }

    public function categoryShow(Category $category){
        return view('categoryShow', compact('category'));
    }

    public function showAnnouncement(Announce $announce){
        return view('showAnnouncement', compact('announce'));
    }

    public function searchAnnounces(Request $request){
        $announces = Announce::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announces.announcementIndex', compact('announces'));
    }
}
