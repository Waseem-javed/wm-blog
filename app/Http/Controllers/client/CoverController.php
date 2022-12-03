<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

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