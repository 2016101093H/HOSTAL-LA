<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reserva, Room;
use App\Http\Requests\ReservaRequest;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'inicio' => $request ->get('inicio'),
            'tiempo' => $request ->get('tiempo'),
            'slug' => $slug
        ));
        $reserva ->save();
        return redirect('/LOSANGELES')->with('status', 'Su reserva ha sido registrada. El id de registro es: '.$slug);
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
    /*public function reserva()
	{
		$resultadoss = Material::select(
			DB::raw('users.name ,materials.title, count(user_view_materials.material_id) as veces_leido')
            )
            ->join('user_view_materials', 'materials.id', '=', 'user_view_materials.material_id')
        ->join('users', 'materials.user_id', '=', 'users.id')
        
	->where('users.name',$request->name)
        ->groupBy('users.name','materials.title')
        ->orderBy('veces_leido','desc')
		
		->get();
		return User::collection($resultadoss);
    }*/
    
}
