<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;
//use DB;
//use Illuminate\Http\Request;
//use Laravel\Lumen\Routing\Controller as BaseController;

class CursoController extends Controller{
   
              public function lista($letra = "A"){
                  //$pessoas = Pessoa::all();
                  $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
                  return view('agenda', compact('pessoas'));

              }


              
  }

  