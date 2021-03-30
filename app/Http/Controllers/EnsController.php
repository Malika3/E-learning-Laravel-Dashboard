<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enseignant;
class EnsController extends Controller
{
    //  //La méthode d'affichage
    public function getens(){
        $ens= DB:: select('select * from enseignants');
        return view('ens',['ens' => $ens]);
  }

  public function dash(){
    return view ('home');
  }
   //La méthode d'insertion
   public function iEnsForm(){
    return view ('ens.insensform');
  }

public function store(Request $req){
    $ens=new Enseignant;

    $ens->name = $req->input('name');
    $ens->email = $req->input('email');
    $ens->grade = $req->input('grade');

    $ens->save();
    return view('home',['enseignant' => $ens]);

}
//La méthode de modification

public function editEns(Request $req2, $id){
    $ens = Enseignant::find($id);
    
    return view('editEns',['enseignant' => $ens]);
}

public function update(Request $request,$id){

  $ens = Voiture::find($id);
  $ens->name=$request->input('name');
  $ens->email=$request->input('email');
  $ens->grade=$request->input('grade');
  $ens->save();
   return redirect('home');


}

//LA méthode de SUPPRESSION
public function destroy(Request $request, $id){
  
  $ens = Enseignant::find($id);
  $ens->delete();
  return redirect()->back();

}
}
