<?php

namespace App\Http\Controllers;

use App\Models\Argonaute;
use Illuminate\Http\Request;

class ArgonauteController extends Controller
{
    //Fonction qui va charger la view home

    public function AffichageArgo()
    {
        $argonautes = Argonaute::get(['nom', 'id']);
        return view('home')->with('argonautes', $argonautes);
    }



    // Fonction qui va charger le formulaire Update Argonaute

    public function AffichageFormUpdate($id)
    {
        $argonaute = $id;
        $argonautes = Argonaute::where('id', '=', $argonaute)->get();
        return view('FormUpdateArgonaute')->with('argonautes', $argonautes);
    }

    // Fonction qui va crée un argonaute

    public function create()
    {

        request()->validate([
            'nom' => ['required'],
        ]);

        $argonaute = request('nom');

        $NewArgonaute = new Argonaute();
        $NewArgonaute->nom = $argonaute;
        $NewArgonaute->save();

        return redirect('/');
    }


    // Fonction qui va modifier un argonaute

    public function update($id)
    {
        request()->validate([
            'nom' => ["required"],
    ]);

    $argonaute =request('nom');


    $array_update = ['nom' => $argonaute];

    $UpdateArgonaute = Argonaute::where('id', $id);

    $UpdateArgonaute->update($array_update);

    return redirect('/');
    }


    // Fonction qui va supprimer un argonaute

    public function delete($id)
    {
        $argonaute = Argonaute::where('id', $id);
        $argonaute->delete();
        return redirect('/');
    }
}
