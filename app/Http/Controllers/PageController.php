<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $articles = [
    1 =>[
            'titolo' => 'Introduzione a PHP 8.4',
            'categoria' => 'Programmazione',
            'corpo' => 'Scopriamo le ultime novità e funzionalità introdotte in PHP 8.4.',
            'visibile' => true
        ],
    2=>[
            'titolo' => 'Guida pratica a Laravel',
            'categoria' => 'Framework',
            'corpo' => 'Come iniziare a sviluppare applicazioni web robuste con Laravel.',
            'visibile' => true
        ],
    3=> [
            'titolo' => 'I segreti del CSS Grid',
            'categoria' => 'Frontend',
            'corpo' => 'Un approfondimento per padroneggiare il layout design con CSS Grid.',
            'visibile' => false
        ],
    4=>[
            'titolo' => 'Sicurezza nelle API REST',
            'categoria' => 'Backend',
            'corpo' => 'Best practices e standard di sicurezza per proteggere le tue API.',
            'visibile' => true
        ],
    5=>[
            'titolo' => 'Ottimizzazione SEO nel 2026',
            'categoria' => 'Marketing',
            'corpo' => 'Strategie avanzate per migliorare il posizionamento sui motori di ricerca.',
            'visibile' => false
        ]];
    
    public function home(){

        return view('/home');

    }

        public function contatti(){

        return view("/contatti");

    }
        
    public function articoli(){

    $titolo = "i nostri articoli";
    $descrizione = "descrizione";

    return view("articoli", ["title"=> $titolo, "description" => $descrizione, "articles" => $this->articles]);

    }
    public function articolo($id){
    $articolo = $this->articles[$id];
    return view("articolo",["articolo" => $articolo]);
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
