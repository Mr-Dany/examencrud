@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<div class="container-fluid spark-screen">
    <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">INGRESE ESTUDIANTE</h3>
            </div>
             <form role="form" action="{{url('guardarestudiante')}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label>nombre</label>
                  <input type="text" class="form-control" placeholder="Ingrese el nombre" name="nombre">
                  <label>apellido</label>
                  <input type="text" class="form-control" placeholder="Ingrese el apellido" name="apellido">
                  <label>cedula</label>
                  <input type="text" class="form-control" placeholder="Ingrese el cedula" name="cedula">
                  <label>sexo</label>
                  <input type="text" class="form-control" placeholder="Ingrese el sexo" name="sexo">
                  </div>
                  

                  <br><br>
                  <div class="form-group">
                      <label>Semestre</label>
                      <select name="idSemestre">
                      @foreach($datos as $item)
                            <option  value="{{$item->id}}">{{$item->semestre}} {{$item->paralelo}}</option>
                      @endforeach
                    </select>
                  </div>
                                 
                </div>
                   <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
                </form>

                
              </div>   
              <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>nombre</th>
                  <th>apellido</th>
                  <th>cedula</th>
                  <th>sexo</th>
                  <th>semestre</th>
                  <th>paralelo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                 @foreach ($datos2 as $item)
                      <tr>
                          <td>{{$item->nombre}}</td>
                          <td>{{$item->apellido}}</td>
                          <td>{{$item->cedula}}</td>
                          <td>{{$item->sexo}}</td>
                @foreach ($datos as $item2)
                <?php if ($item->idSemestre==$item2->id): ?>
                    <td>{{$item2->semestre }}</td>
                    <td>{{$item2->paralelo }}</td>
                <?php endif ?>
                              
                  @endforeach
                         <td><a href="{{url('eliminarestudiante',[$item->id])}}">Eliminar</a><a href="{{url('editarestudiante',[$item->id])}}">Editar</a></td>
                         </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
        </div>      
                </div>
                </div>








    





@endsection