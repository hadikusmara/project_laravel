<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlFormattingController extends Controller
{
    public function index(){
        return view('admin.html2.formatting_html');
    }
    public function index_next(){
        return view('admin.html2.formatting_html_next');
    }
}