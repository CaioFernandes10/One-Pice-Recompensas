<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\recompensas;


class recompensaController extends Controller
{
    function index(){
       
       $dados =  DB::select('select id, nome,apelido,recompensa,descricao  from recompensas');

        

        return view('layouts.recompensa',compact('dados'));
    }
}
