<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
   public function index()
   {
    return view('index');
   }
   public function contact()
   {
    return view('contact');
   }
   public function skills()
   {
    return view('skills');
   }
    public function cv()
    {
     return view('cv');
    }
}
