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

      public function delete(Request $req){
        $deletemodel =new Promotion();
        $deletemodel::where('id',$req->id)->delete();
        return redirect('index');

      }

      public function edit($id){
        $editpromotion=new Promotion;
       $Promotion = $editpromotion::where('id', $id )->get();
        return view('edit',compact('Promotion'));
      }

      public function Update($id , Request $req){
        $editpromotion=Promotion::where('id',$id)->fist();
        $editpromotion->name=$req->name;
        $editpromotion->save();
        return redirect('index')->with("status","Update Successfully");
       ;
      }

    }