<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoverController extends Controller
{

    public function cover(){
        return view('cover.home');
    }
    public function contact(){
        return view('cover.contact');
    }
}