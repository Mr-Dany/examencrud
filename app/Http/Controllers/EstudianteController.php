<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Semestre;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Semestre::all();
        $datos2=Estudiante::all();
        return view('adminlte::Estudiante',compact('datos','datos2'));
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
    public function guardar(Request $request)
    {
        $estu=new Estudiante;
        $estu->nombre=$request->nombre;
        $estu->apellido=$request->apellido;
        $estu->cedula=$request->cedula;
        $estu->sexo=$request->sexo;
        $estu->idSemestre=$request->idSemestre;
        $estu->save();
        return redirect()->action('EstudianteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $tipo=Estudiante::find($id);
        $datos=Semestre::all();
        return view('adminlte::editarestudiante',compact('tipo','datos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request,$id)
    {  
            $tipo=Estudiante::find($id);
            $tipo->nombre=$request->nombre;
            $tipo->apellido=$request->apellido;
            $tipo->cedula=$request->cedula;
            $tipo->sexo=$request->sexo;
            $tipo->idSemestre=$request->idSemestre;
            $tipo->save();
            return  redirect()->action('EstudianteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {       
          $tipo=Estudiante::find($id);
          $tipo->delete();
          return  redirect()->action('EstudianteController@index');
    }
}
