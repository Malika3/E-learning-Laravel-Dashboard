<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Salle;
class SalleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
  
  public function getsalles(){
    $salles= DB:: select('select * from salles');
    return view('salle',['salles' => $salles]);

  }

   //La méthode d'insertion
   public function insalleform(){
    return view ('salle.insalleform');
  }

  public function store(Request $request){
    $data = $request->input();
    try{
        $v=new Salle;
        $v->nom = $data['nom'];
        $v->save();
        return redirect('getsalles');
    }
    catch(Exception $e){
        return redirect('getsalles');
    }
    }
   //La méthode de modification
    public function editsalle($id){
        $salle = Salle::find($id);
        return view('salle.editsalle',['salle' => $salle]);
    }
    public function update(Request $request,$id) {
        $salle = Salle::find($id);
        $salle->nom=$request->input('nom');
        $salle->save();
        return redirect('getsalles');
    }

     //La méthode de suppression
  public function destroy($id){
    $salle = Salle::find($id);
    $salle->delete();
    return redirect('getsalles');
    }

}
    




