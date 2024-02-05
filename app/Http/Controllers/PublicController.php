<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home()
    {
        return response()->view('home');  
    }
}
