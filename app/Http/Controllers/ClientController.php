<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index(){
        $clients=client::all();

        return view('liste',['clientrep'=>$clients]);
    }
    function create(){
        return view('formulaire');
    }

    function strore(Request $request){
        $client=new client();
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->save();
        return redirect('formulaire');
    }
}



