<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Module;
class ModuleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
  
   public function getmodules(){
     $module= DB:: select('select * from modules');
     return view('module',['modules' => $module]);

   }
  

  //La méthode d'insertion
  public function imoduleForm(){
   return view ('module.insmoduleform');
 }

public function store(Request $req){
 $module=new Module;
 $module->moduleName = $req->input('moduleName');
 $module->save();
 return redirect('getmodules');    


}
//La méthode de modification

public function editmodule(Request $req2, $id){
   $module = Module::find($id);
   return view('module.editmoduleform',['modules' => $module]);
}

public function update(Request $request, $id){

 $module = Module::find($id);
 $module->moduleName=$request->input('moduleName');
 $module->save();
  return redirect('getmodules');    
}

//LA méthode de SUPPRESSION
public function destroy(Request $request, $id){
 $module = Module::find($id);
 $module->delete();
return redirect('getmodules');    


    }
}
