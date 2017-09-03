<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Ayuda_s extends Controller
{
    public function index(){
    	return view('ayuda_s');
    }
}
