<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home(){
		return view('welcome');
	}
 
	public function mastercif(){
		return view('mastercif/index');
	}

	public function kontak(){
		return view('kontak');
	}

	public function klaimJalinan()
	{
		return view('jalinan/index');
	}

}
