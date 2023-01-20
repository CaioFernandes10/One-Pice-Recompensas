<?php

namespace App\Http\Controllers;

use App\Models\recompensas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dadosController extends Controller
{
    
   function index(Request $request){
    //var_dump($request->all());
    
    $request->validate([

       'nome'=>'required ||min:3||max:40|| unique:recompensas',
       'apelido'=>'required ||min:3||max:40|| unique:recompensas',
       'recompensa'=>'required',
       'descricao'=>'required ||max:140',

    ],
    [
      'nome.required' => 'O campo precisa ser preenchido',
      'required' => 'o campo :attribute deve ser preenchido',
   ]
   
   
   );


    recompensas::create($request->all());
      







    return redirect()->route('paginas.home');

   }
}
