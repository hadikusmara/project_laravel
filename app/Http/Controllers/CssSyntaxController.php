<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssSyntaxController extends Controller
{
    public function index()
    {
        return view('admin.CssSyntax.index');
    }

    public function index_next()
    {
        return view('admin.CssSyntax.index_next');
    }
}
