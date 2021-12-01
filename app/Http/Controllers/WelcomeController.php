<?php

namespace App\Http\Controllers;

use App\Models\information;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function welcome(){
       $info = information::All();
       return view('welcome')->with(compact('info'));
   }

   public function nosotros(){
    $info = information::All();
    return view('nosotros')->with(compact('info'));
    }

    public function servicios(){
        $info = information::All();
        return view('servicios')->with(compact('info'));
    }

    public function medicos(){
        $info = information::All();
        return view('medicos')->with(compact('info'));
    }

    public function galeria(){
        $info = information::All();
        return view('galeria')->with(compact('info'));
    }

    public function faq(){
        $info = information::All();
        return view('preguntas-frecuentes')->with(compact('info'));
    }
}
