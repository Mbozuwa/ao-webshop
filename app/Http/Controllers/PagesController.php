<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        $title = 'Electronic Webshop';
        return view('welcome', compact('title'));
    }

    public function index(){
        $title = 'Homepage';
        return view('pages.index', compact('title'));
    }
    
}
