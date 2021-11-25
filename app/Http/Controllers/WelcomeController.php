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
}
