<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        return view('/home');

    }

        public function contatti(){

        return view("/contatti");

    }
        
    public function articoli(){

    $titolo = "i nostri articoli";
    $descrizione = "descrizione";
    return view("/articoli", ["title"=> $titolo, "description" => $descrizione]);

    }

    public function ChiSiamo(){

    $titolo = "chi siamo";
    $descrizione = "descrizione";
    return view("/chi-siamo", ["title"=> $titolo, "description" => $descrizione]);

    }


    public function news(){
    $titolo = "le news";

    return view("/news", ["title"=> $titolo]);

    }
}
