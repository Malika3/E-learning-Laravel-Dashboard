<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Niveau;


class NiveauxController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
  
   public function getniveaux(){
     $niveau= DB:: select('select * from niveaux');
     return view('niveau',['niveaux' => $niveau]);

   }
  
     //La méthode d'insertion
  public function insnivform(){
    return view ('niveau.insnivform');
  }
   
    public function store(Request $request)
    {
        $niveau =new Niveau;
        $niveau->NiveauName=$request->input('NiveauName');
        $niveau->groupe_id=$request->input('groupe_id');
        $niveau->seance_id=$request->input('seance_id');

        $niveau->save();
        return redirect('getniveaux');    
    }

 //La méthode de modification

public function editniv(Request $req2, $id){
    $niveau = Niveau::find($id);
    return view('niveau.editnivform',['niveaux' => $niveau]);
 }
 
 public function update(Request $request, $id){
 
  $niveau = Niveau::find($id);
  $niveau->NiveauName=$request->input('NiveauName');
  $niveau->save();
   return redirect('getniveaux');    
 }
 
 //LA méthode de SUPPRESSION
 public function destroy(Request $request, $id){
  $niveau = Niveau::find($id);
  $niveau ->delete();
 return redirect('getniveaux');    
 
 
     }
 }
 
