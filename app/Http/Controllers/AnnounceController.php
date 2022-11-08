<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{

    public function storeAnnouncement(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            // 'image' => 'required',
        ]);
        // $image = $request->file('image');
        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            // 'image' => $new_name
        );
        Announce::create($form_data);
        return redirect()->route('welcome')->with('success', 'Annuncio pubblicato con successo!');
    }

}
