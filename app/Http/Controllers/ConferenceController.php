<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Conference;

class ConferenceController extends Controller
{
    //
    public function getLesConferences(){
        $conference= new Conference();
        $lesConferences= $conference->getLesConferences();
        return view('listeConferences',compact('lesConferences'));
    }
    public function getConference(i){
        $conference= new Conference();
        $lesConferences= $conference->getConference(i);
        return view('listeConferences',compact('lesConferences'));
    }
}
