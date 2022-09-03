<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id){
        return view('home',compact('id'));
    }
    public function about(){
        return "hello from about method";
    }
}
