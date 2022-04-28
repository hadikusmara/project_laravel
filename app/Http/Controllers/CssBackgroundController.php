<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssBackgroundController extends Controller
{
    public function index(){
        return view('admin.html2.cssbackground');
    }
    public function index_next(){
        return view('admin.html2.cssbackground_next');
    }
}
