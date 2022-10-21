<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function select( Request $req){
        $data=Promotion::all();  
        return view('index',compact('data'));
      }

      public function add(){
        return view('add');
    
    }

      public function insert(Request $req){
        $addmodel=new Promotion;
        $addmodel->name=$req->name;
        $addmodel->save();
      }
}
