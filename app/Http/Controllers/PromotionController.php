<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\apprenants;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
  public function select(){
      $data = promotion::all();
      return view ('index', compact("data"));
  }

  public function add(){
      return view('add');
  }

  public function insert(Request $request){
      $addpromotion = new promotion();
      $addpromotion->name = $request->name;
      $addpromotion->save(); 
      return redirect('index');

  }

  public function delete(Request $request){

      promotion::where('id',$request->id)->delete();
      return redirect('index');
  }


  public function update_promotion($id){
    //   $edit = new promotion();    
    //   $promotion = $edit::where('id', $id )->get();
    //   return view('update_promotion', compact('promotion'));
    $data=apprenants::select('apprenants.name','email','promotions.id as id_promo','apprenants.id as id_app')
    ->RightJoin('promotions','promotions.id','=','apprenants.id_promo') 
    ->where('promotions.id','=',$id)->get();
    return view('update_promotion', compact("data"));

  }
   

  public function edit($id,Request $request){
      $editpromotion = promotion::where('id',$id)->first();
      $editpromotion->name = $request->name;
      $editpromotion->save();
      return redirect('index');
      // return $editpromotion;
  }

  public function search($name=null){ 
      // dd($request->search);
      //  dd($data);
      // if($name == null){
      //     $data =promotion::all();
      //     return view('index_search',compact('data'));        }
      // else {
          $data =promotion::where('name', 'like','%'.$name.'%')->get();
          return view('index_search',compact('data'));

      }

  }

    // }