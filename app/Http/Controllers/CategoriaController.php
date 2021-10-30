<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
  public function index() {
      $categoria=Categoria::select('id','nombre')->orderBy('nombre','desc')->get();
      return [
          'cat'=>$categoria
      ];
  }


   public function store(Request $request) {
   $categoria= new Categoria();
   $categoria->nombre=$request->nombre;
   $categoria->edo=$request->edo;

   $categoria->save();

   }

   public function update(Request $request) {
       $categoria= Categoria::findOrFail($request->id);
       $categoria->nombre=$request->nombre;
       $categoria->edo=$request->edo;

       $categoria->save();
   }

   public function destroy(Request $request) {
       $categoria= Categoria::findOrFail($request->id);
       $categoria->delete();
   }
   
}
