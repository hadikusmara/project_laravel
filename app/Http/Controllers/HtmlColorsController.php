<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlColorsController extends Controller
{
    public function index(){
        return view('admin.html2.colors');
    }
    public function index_next(){
        return view('admin.html2.colors_next');
    }
}