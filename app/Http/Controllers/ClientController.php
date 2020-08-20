<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //


    public function profil(Request $req ){

      return view('client.profil');
    }

}
