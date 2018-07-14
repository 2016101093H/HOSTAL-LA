<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Reserva1Controller extends Controller
{
    public function index()
    {
        $clientes=DB::table('clientes')
        ->select('id','nombre')
        ->get();
        return view("reserva",["clientes"=>$clientes]);
        $cliente->save();
    }
}
