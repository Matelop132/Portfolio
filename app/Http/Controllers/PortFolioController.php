<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    function Index(){
        return view('index');
    }
    function Projet(){
        return view('projet');
    }
    function Contact(){
        return view('contact');
    }

    function Formation(){
        return view('formation');
    }
}
