@extends('layouts.plantilla')

@section('mantenimiento', 'active')

@section('title', 'Registrar mantenimiento')

@section('content')
    <div class="col-12">
        <!-- form start -->
        <form action=" {{route('mantenimiento.store')}} " method="POST" id="maintenance">
            @csrf
            <div class="card-body row">

                <div class="form-group col-6">
                    <label for="firstName">Nombres:</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Pepito">
                </div>

                <div class="form-group col-6">
                    <label for="lastName">Apellidos:</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Perez">
                </div>

                <div class="form-group col-6">
                    <label for="email">Correo:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@correo.com">
                </div>

                <div class="form-group col-6">
                    <label for="typeDocument">Tipo de documento:</label>
                    <select class="form-control" name="typeDocument" id="typeDocument">
                        <option value="">--Seleccione--</option>
                        @foreach ($data['typeDocument'] as $row)
                            <option value=" {{$row->id}} "> {{$row->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="numDocument">Numero de documento:</label>
                    <input type="number" class="form-control" name="numDocument" id="numDocument" placeholder="1.110.222.333">
                </div>

                <div class="form-group col-6">
                    <label for="numPhone">Numero de telefono:</label>
                    <input type="number" class="form-control" name="numPhone" id="numPhone" placeholder="3185555555">
                </div>

                <div class="form-group col-6">
                    <label for="address">Dirección:</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Av siempre viva">
                </div>

                <div class="form-group col-6">
                    <label for="typeTeam">Tipo de equipo:</label>
                    <select name="typeTeam" class="form-control" id="typeTeam">
                        <option value="">--Seleccione--</option>
                        @foreach ($data['typeTeam'] as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                            
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="reference">Referencia:</label>
                    <select name="reference" class="form-control" id="reference">
                        <option value="">--Seleccione--</option>
                        @foreach ($data['reference'] as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="typeMaintenance">Tipo de mantenimiento:</label>
                    <select name="typeMaintenance" class="form-control" id="typeMaintenance">
                        <option value="">--Seleccione--</option>
                        @foreach($data['typeMaintenance'] as $row)
                            <option value=" {{$row->id}} "> {{$row->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-12">
                    <label for="description">Dirección:</label>
                    <textarea name="description" class="form-control" id="description" cols="10" rows="5"></textarea>
                </div>

            </div>
        </form>   
        <!-- /.card-body -->
        <div class="card-footer">
            <button onclick="sendAjax('maintenance')" class="btn btn-success">Guardar</button>
        </div>     
    </div>
    <div class="col-12 card-body">
        <table class="dataTable table table-bordered table-hover" data-route=" {{route('mantenimiento.showTable')}} ">
            <thead>
                <tr class="columns">
                    <th data-name="maintId">Acción</th>
                    <th data-name="maintId">Id</th>
                    <th data-name="nombres">Nombres</th>
                    <th data-name="apellidos">Apellidos</th>
                    <th data-name="numeroTelefono">Numero de telefono</th>
                    <th data-name="direccion">Dirección</th>
                    <th data-name="referencia">referencia</th>
                    <th data-name="tipoEquipo">Tipo de equipo</th>
                    <th data-name="tipoMantenimiento">Tipo de mantenimiento</th>
                    <th data-name="descripcion">Descripción</th>
                </tr> 
            </thead>
        </table>
    </div>
     
@endsection