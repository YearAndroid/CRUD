@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje')){{
        Session::get('Mensaje')
}}
@endif


<a href={{ URL('/empleado/create')}}>Agregar Empleado</a>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>id</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Cargo</th>
            <th>Edad</th>
            <th>Celular</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach ($datos as $emp)
        
                <td>{{$loop->iteration}}</td>
                    <td>{{$emp->id}}</td>
                    <td>{{$emp->nombre}}</td>
                    <td>{{$emp->direccion}}</td>
                    <td>{{$emp->cargo}}</td>
                    <td>{{$emp->edad}}</td>
                    <td>{{$emp->celular}}</td>
                    <td>{{$emp->usuario}}</td>
                    <td>{{$emp->password}}</td>
                    <td>
                    
                      <a href="{{URL::action('EmpleadoController@editar',$emp->id)}}" type="button" class="btn bt-succes">Editar</a> 
                     | 
                    
                    
              <a href="{{URL::action('EmpleadoController@eliminar',$emp->id)}}" type="button" class="btn btn-danger">Eliminar</a>
                    
                    </td>
               
        </tr>
    @endforeach
    
        
    </tbody>
</table>

</div>


@endsection