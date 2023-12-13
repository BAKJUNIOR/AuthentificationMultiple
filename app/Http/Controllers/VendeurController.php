<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendeurController extends Controller
{
    //
    public function vendeurDashboard(){
        return view('vendeur.vendeur_dashboard');
    }

}
