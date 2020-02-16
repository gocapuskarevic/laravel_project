<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function login(){
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
    }
}
