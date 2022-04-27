<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssBackgroundController extends Controller
{
    public function index(){
        return view('admin.CssText.css_background');
    }

    public function index_next(){
        return view('admin.CssText.css_background_next');
    }
}
