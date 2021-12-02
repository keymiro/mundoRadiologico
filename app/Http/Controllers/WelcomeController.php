<?php

namespace App\Http\Controllers;

use App\Mail\MessageCita;
use App\Mail\MessageContact;
use App\Mail\MessageEncuestaSastifacion;
use App\Models\information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class WelcomeController extends Controller
{

    public function contactoSend(){
        $message = request();
        Mail::to('Atencionusuario.mr@gmail.com')->send(new MessageContact($message));
        return back()->with('notification','Mensaje enviado correctamente');
    }

    public function citaSend(){
        $message = request();
        Mail::to('Atencionusuario.mr@gmail.com')->send(new MessageCita($message));
        return back()->with('notification','Mensaje enviado correctamente');
    }

    public function encuestaSastifacion(){
        $message = request();
        Mail::to('mundoradiologicoyopal@gmail.com')->send(new MessageEncuestaSastifacion($message));
        return back()->with('notification','Mensaje enviado correctamente');
    }

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

    public function dd(){
        $info = information::All();
        return view('derechos-deberes')->with(compact('info'));
    }

    public function contacto(){
        $info = information::All();
        return view('contacto')->with(compact('info'));
    }

    public function cita(){
        $info = information::All();
        return view('cita')->with(compact('info'));
    }

    public function covid(){
        $info = information::All();
        return view('covid')->with(compact('info'));
    }

    public function pqr(){
        $info = information::All();
        return view('pqr')->with(compact('info'));
    }
}
