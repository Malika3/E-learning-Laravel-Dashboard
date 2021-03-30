<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Enseignant;
class EnsController extends Controller
{

    public function __construct(){
         $this->middleware('auth');
    }
    public function getadmins(){
      $admin= DB:: select('select * from users');
      return view('admin',['users' => $admin]);

    }
    public function getens(){
      $ens= DB:: select('select * from enseignants');
      return view('ens',['enseignants' => $ens]);

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
    return view('ens',['enseignants' => $ens]);

}
//La méthode de modification

public function editEns(Request $req2, $id){
    $ens = Enseignant::find($id);
    return view('ens.editensform',['enseignant' => $ens]);
}

public function update(Request $request, $id){

  $ens = Enseignant::find($id);
  $ens->name=$request->input('name');
  $ens->email=$request->input('email');
  $ens->grade=$request->input('grade');
  $ens->save();
   return redirect('getens');    
}

//LA méthode de SUPPRESSION
public function destroy(Request $request, $id){
  $ens = Enseignant::find($id);
  $ens->delete();
 return redirect('getens');    


}
}
