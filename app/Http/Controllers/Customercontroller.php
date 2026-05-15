<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    function renderContacts(){
        return view('users/contact');
    }

    function renderServices(){
        return view('users/services');
    }
}
