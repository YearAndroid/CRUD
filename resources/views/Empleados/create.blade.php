@extends('layouts.app')

@section('content')
<div class="container">


<h1 style="text-align:center;">Agregar Nuevo Empleado</h1>
<br>

<form action=" /empleado/store " , method="post">

{{ csrf_field() }}
@include('Empleados.form',['Modo'=>'crear'])


</form>

</div>

@endsection
