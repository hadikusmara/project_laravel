<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssTextController extends Controller
{
    public function index(){
        return view('admin.CssText.index');
    }

    public function index_next(){
        return view('admin.CssText.index_next');
    }
}
