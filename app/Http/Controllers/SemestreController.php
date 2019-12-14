<?php

namespace App\Http\Controllers;

use App\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Semestre::all();
        return view('adminlte::Semestre',compact('datos'));
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
    public function guardar( Request $request)
    {
        $semes= new Semestre();
        $semes->semestre=$request->semestre;
        $semes->paralelo=$request->paralelo;
        $semes->save();
        return  redirect()->action('SemestreController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function show(Semestre $semestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function edit(Semestre $semestre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semestre $semestre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semestre  $semestre
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {      
          $tipo=Semestre::find($id);
          $tipo->delete();
         return  redirect()->action('SemestreController@index');
    }
}
