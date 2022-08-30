<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function comics(){
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];
        return view('comics', $data);
        return view('comics');
    }
}
