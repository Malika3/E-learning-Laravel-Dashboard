<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Groupe;

class GroupeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
  
   public function getgroupes(){
     $groupe= DB:: select('select * from groupes');
     return view('groupe',['groupes' => $groupe]);

   }
  

  //La méthode d'insertion
  public function insgroupe(){
   return view ('groupe.insgroupe');
 }

public function store(Request $req){
 $groupe=new Groupe;
 $groupe->num= $req->input('num');
 $groupe->save();
 return redirect('getgroupes');    


}
//La méthode de modification

public function editgroupe(Request $req2, $id){
   $groupe = Groupe::find($id);
   return view('groupe.editgroupe',['groupes' => $groupe]);
}

public function update(Request $request, $id){
 $groupe = Groupe::find($id);
 $groupe->num=$request->input('num');
 $groupe->save();
  return redirect('getgroupes');    
}

//LA méthode de SUPPRESSION
public function destroy(Request $request, $id){
 $groupe = Groupe::find($id);
 $groupe->delete();
return redirect('getgroupes');    


    }
}
