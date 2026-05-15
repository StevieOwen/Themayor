<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appartmentcontroller extends Controller
{
   function renderAppartments(){

        return view('users/appartements');
   }
}
