<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Reserva, Room, Cliente};
use App\Http\Requests\ReservaRequest;
use DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=DB::table('clientes')
        ->select('id','nombre')
        ->get();
        return view("reserva",["clientes"=>$clientes]);
        $clientes->save();
   

    }
    public function index1()
    {
        
        $reservas=Reserva::all();
        return view('modificar', compact('reservas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservaRequest $request)
    {
        $slug = uniqid();
        $reserva = new Reserva(array(
            'type' => $request ->get('type'),
            'nombre' => $request ->get('nombre'),
            'inicio' => $request ->get('inicio'),
            'cant_dias' => $request ->get('cant_dias'),
            'cant_hab' => $request ->get('cant_hab'),
            'tipo_pago' => $request ->get('tipo_pago'),
            'total_pago' => $request ->get('total_pago'),
            'slug' => $slug
        ));
        $reserva->save();
        return redirect('/reserva')->with('status', 'Su reserva ha sido registrada. El id de registro es: '.$slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*public function pago()
	{
        if('type'=='Dobles')
        'total_pago' == 'cant_dias'*30;
        if('type'=='Triples')
        'total_pago' = 'cant_dias'*40;
        if('type'=='Matrimoniales')
        $resultadoss = 'cant_dias'*50;
        if('type'=='Individuales')
        $resultadoss = 'cant_dias'*60;

   return('total_pago');
    }*/
    

}
