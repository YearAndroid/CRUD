@extends('layouts.app')

@section('content')
<div class="container">


<h1 style="text-align:center;">Editar Empleado</h1>
<br>


<form action="{{ URL::action('EmpleadoController@editar',$empleado->id)}}" method="post" >

{{csrf_field()}}

{{method_field('PATCH')}}

@include('Empleados.form',['Modo'=>'editar'])

</form>
</div>


@endsection