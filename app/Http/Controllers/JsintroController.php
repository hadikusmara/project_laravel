<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsintroController extends Controller
{
    public function index(){
        return view('admin.JS2.index');
    }
    public function index_next(){
        return view('admin.JS2.index_next');
    }

  

}
