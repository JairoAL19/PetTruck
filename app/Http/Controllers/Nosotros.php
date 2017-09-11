<?php

namespace App\Http\Controllers;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
class Nosotros extends Controller
{
	public function index(){
		$agent = new Agent();
    	return view('nosotros', compact('agent'));		
	}
}
