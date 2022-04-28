<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssTutorialController extends Controller
{
    public function index(){
        return view('admin.html2.csstutorial');
    }
    public function index_next(){
        return view('admin.html2.csstutorial_next');
    }
}
