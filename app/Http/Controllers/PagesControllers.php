<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function index(){
        $naslov = "Dobrodosli na pocetnu stranu";
        return view('project-pages.index', compact('naslov'));
    }
    public function about(){
        return view('project-pages.about');
    }
    public function services(){
        $data = array(
                    'heading'    => 'Nasa muzika',
                    'categories' =>['Pop','Rock',"Punk"]
                    );
        return view('project-pages.services')->with($data);
    }
    /* public function login(){
        return view('pages.login');
    }
    public function posts(){
        return view('pages.posts');
    }
    public function post_single(){
        return view('pages.post_single');
    }
    public function contact(){
        return view('pages.contact');
    } */
}
