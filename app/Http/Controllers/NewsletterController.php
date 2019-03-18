<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;


class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        //Ajoute mail ou met à jour pour éviter les doublons
        Newsletter::subscribeOrUpdate($request->input('email'), [], 'newsletter');

        return redirect('/')->with('success', 'Vous êtes inscrit à la Newsletter de FLUID !');
        // dd($request->input());
    }
}