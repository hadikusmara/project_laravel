<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssColourController extends Controller {

	public function index(){
		return view('admin.CssText.css_howto');
	}
	public function index_next(){
        return view('admin.CssText.css_howto_next');
    }
} 
