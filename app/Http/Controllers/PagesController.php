<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PagesController extends Controller
{
    public function home()
    {
        // if(Auth::check()){
            return view('home.index');
        // }
        // return Redirect::to('/')->withSuccess('Opps! You do not have access');
    }

    public function about()
    {
        return view('about.about', ['nama' => 'Ilham Gumantung Gusti']);
    }
}
