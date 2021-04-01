<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Seance;

class SeanceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
  
   public function getseances(){
     $seance= DB:: select('select * from seances');
     return view('seance',['seances' => $seance]);

   }
  
     //La méthode d'insertion
  public function inseance(){
    return view ('seance.inseance');
  }
   
    public function store(Request $request)
    {
        $seance =new Seance;
        $seance->heureD=$request->input('heureD');
        $seance->heureF=$request->input('heureF');
        $seance->jour=$request->input('jour');
        $seance->save();
        return redirect('getseances');    
    }

 //La méthode de modification

public function editseance(Request $req2, $id){
    $seance = Seance::find($id);
    return view('seance.editseance',['seances' => $seance]);
 }
 
 public function update(Request $request, $id){
 
  $seance = Seance::find($id);
  $seance->heureD=$request->input('heureD');
  $seance->heureF=$request->input('heureF');
  $seance->jour=$request->input('jour');
  $seance->save();
   return redirect('getseances');    
 }
 
 //LA méthode de SUPPRESSION
 public function destroy(Request $request, $id){
  $seance = Seance::find($id);
  $seance ->delete();
 return redirect('getseances');    
 
 
     }
}
