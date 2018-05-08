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
        $data = array(
            'title' => 'Items',
            'services' => ['Consoles', 'Games', 'Accessoires', 'Merchandise']
        ); 
        return view('pages.index')->with($data);
    }
    
}
