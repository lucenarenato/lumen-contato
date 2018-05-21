<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends Controller{
    
    public function __construct()
    {
    	# code...
    }
    public function index() {
    	//return "Ola mundo!";
    	return view('layout');
    }
    public function index2(){
    	return view('layout2');
    }
    public function curso(){
        return view('agenda');
    }
}
