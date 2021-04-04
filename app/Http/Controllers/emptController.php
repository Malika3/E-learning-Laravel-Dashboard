<?php

namespace App\Http\Controllers;
use App\Http\Controller\NiveauxController;
use Illuminate\Http\Request;
use DB;
use App\Niveau;
use App\Module;
use App\Seance;
use App\Salle;
use App\Enseignant;
use App\Empt;



class emptController extends  Controller
{
      public function __construct(){
        $this->middleware('auth');
    }
    public function getempt(){
      $empt= Empt::all();
      return view('empT',['empts' => $empt]);
 
    }
    
      public function filter(Request $request)
        {

          if ( $selectValue = $request->input('niveaux')  ) {
            
              return redirect ('get1CPI');
            

          }
        }
      


        public function get1CPI(){
          $empt= Empt::all();
          $seance= Seance::all();
          return view('affempt.get1CPI',['empts' => $empt,'seances' => $seance]);
        }

     
    }


