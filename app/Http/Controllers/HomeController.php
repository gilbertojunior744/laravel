<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   //incoke = chama a classe de forma automatizada
    public function __invoke(){
        return view('home');
    }
}
