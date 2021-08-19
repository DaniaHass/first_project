<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(){
         return view ('Index');
    }

    public function content(){
        $name=null; 
        return view('content')->with('name',$name);
    }
}
