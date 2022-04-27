<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlQuotationsController extends Controller
{
    public function index()
    {
        return view('admin.html2.quotations');
    }
    public function index_next()
    {
        return view('admin.html2.quotations_next');
    }
}
