<?php

namespace App\Http\Controllers;

use App\piezas;
use Illuminate\Http\Request;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piezas = piezas::all();
        return view('piezas')->with('piezas', $piezas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pieza = new piezas;
        $pieza->nombre = $request->nombre;
        $pieza->descripcion = $request->descripcion;
        $pieza->numeroPiezas = $request->numeroPiezas;
        $pieza->costoPieza = $request->costoPieza;
        $pieza->save();

        return redirect('/piezas');
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
        //buscar el dato
        $pieza = piezas::find($id); 
        //pasar el dato a la vista
        return view('editapieza')->with('pieza', $pieza);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pieza = piezas::find($request->id);
        if(!is_null($pieza)){
            $pieza->nombre = $request->nombre;
            $pieza->descripcion = $request->descripcion;
            $pieza->numeroPiezas = $request->numeroPiezas;
            $pieza->costoPieza = $request->costoPieza;
            $pieza->save(); 
        }
        return redirect('/piezas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pieza = piezas::find($id);
        $pieza->delete();
        return redirect('/piezas');
    }
}
