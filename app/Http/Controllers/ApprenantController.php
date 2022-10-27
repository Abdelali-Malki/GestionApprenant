<?php

namespace App\Http\Controllers;

use App\Models\apprenants;
use Illuminate\Http\Request;
class ApprenantController extends Controller
{
    public function selectapprenant(){
        $selectapprenant = apprenants::all();
         return view ('selectapprenant', compact("selectapprenant"));
    }

    public function deleteapprenant(Request $request){

        apprenants::where('id',$request->id)->delete();
        return redirect('selectapprenant');
    }

    public function insertapprenant(Request $req){
        $addapprenant = new apprenants();
        $addapprenant->name= $req->name;
        $addapprenant->email= $req->email;
        $addapprenant->id_promo=1;
        $addapprenant->save();
        return redirect('selectapprenant');

    }
    public function updateapprenant($id){
        $edit = new apprenants();    
        $apprenants = $edit::where('id', $id )->get();
        return view('updateapprenant', compact('apprenants'));
    }
    public function edit($id,Request $request){
        $editapprenant = apprenants::where('id',$id)->first();
        $editapprenant->name = $request->name;
        $editapprenant->email = $request->email;
        $editapprenant->save();
        return redirect('selectapprenant');
    }

    


  
}
