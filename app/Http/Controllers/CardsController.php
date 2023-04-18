<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CardsController extends Controller
{

  public $cryptedData = '[
        {
          "id": "1",
          "title": "Watchmen",
          "description": "La storia di un gruppo di supereroi disillusi costretti ad agire di nascosto dopo che il governo ha vietato le attività dei costumi.",
          "image": "watchmen.jpg",
          "year": "1986"
        },
        {
          "id": "2",
          "title": "Batman: Il Cavaliere Oscuro",
          "description": "La storia di Batman che deve lottare contro il suo nemesi Joker, malvagio e folle, mentre cerca di salvare la città di Gotham.",
          "image": "batman.jpg",
          "year": "1986"
        },
        {
          "id": "3",
          "title": "Sin City",
          "description": "La storia di Marv, un uomo che sta cercando di scoprire chi ha ucciso la sua amata Goldie, in una città corrotta e violenta.",
          "image": "sincity.jpg",
          "year": "1991"
        },
        {
          "id": "4",
          "title": "V for Vendetta",
          "description": "La storia di un uomo mascherato che cerca di far cadere un governo totalitario in un futuro distopico.",
          "image": "vforvendetta.jpg",
          "year": "1988"
        },
        {
          "id": "5",
          "title": "Sandman",
          "description": "La storia del signore dei sogni, Morfeo, che cerca di riacquistare il suo potere e la sua posizione dopo esser stato imprigionato per decenni.",
          "image": "sandman.jpg",
          "year": "1989"
        },
        {
          "id": "6",
          "title": "Preacher",
          "description": "La storia del predicatore Jesse Custer, che viene posseduto da una creatura divina che gli dona il potere di parlare con Dio.",
          "image": "preacher.jpg",
          "year": "1995"
        },
        {
          "id": "7",
          "title": "The Walking Dead",
          "description": "La storia di un gruppo di sopravvissuti a una apocalisse zombie in cerca di un luogo sicuro da chiamare casa.",
          "image": "thewalkingdead.jpg",
          "year": "2003"
        },
        {
          "id": "8",
          "title": "Saga",
          "description": "La storia di una coppia mista di innamorati, Alana e Marko, che devono fuggire dalle rispettive razze in guerra per proteggere la loro figlia appena nata.",
          "image": "saga.jpg",
          "year": "2012"
        },
        {
          "id": "9",
          "title": "The Sandman Universe",
          "description": "La storia del ritorno del signore dei sogni, Morfeo, e del suo nuovo ruolo come custode del sogno.",
          "image": "sandmanuniverse.jpg",
          "year": "2018"
        },
        {
          "id": "10",
          "title": "Umbrella Academy",
          "description": "La storia di un gruppo di supereroi disfunzionali, tutti nati nello stesso giorno e addestrati per salvare il mondo.",
          "image": "umbrellaacademy.jpg",
          "year": "2007"
        }
      ]
    ';


  public function homepageCards()
  {
    $decoded = json_decode($this->cryptedData, true);
    return view('welcome', ['comics' => $decoded]);
  }

  public function singleCard($id)
  {
    $decoded = json_decode($this->cryptedData, true);
    foreach ($decoded as $comic) {
      if ($comic['id'] == $id) {
        return view('singlecard', ['comic' => $comic]);
      }
    }
  }
}