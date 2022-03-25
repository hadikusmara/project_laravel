
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HTML_IntroductionController extends Controller
{
     public function index(){
        return view('html.HTML_Introduction');
    }
}