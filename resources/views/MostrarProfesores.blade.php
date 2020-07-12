@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')


<div class="contenido">
<button type="button" class="btn btn-success float-right" >Cerrar Sesión</button>
<section id="container">

<h1>Lista de Profesores</h1>
@if ($profesor->isEmpty())
                <div>No hay Mensajes</div>
            @else

<table>

<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>cedula</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Centro Regional</th>
</tr>
@foreach($profesor as $profesores)


<tr>
<td>{!! $profesores->nombre !!}</td>
<td>{!! $profesores->apellido !!}</td>
<td>{!! $profesores->cedula !!}</td>
<td>{!! $profesores->telefono !!}</td>
<td>{!! $profesores->correo !!}</td>
<td>{!! $profesores->sedenombre  !!}</td>
</tr>
@endforeach

</table>
@endif

<div class="paginador">

{{ $profesor->links() }}
</div>


</section>










    <div class="botonvolver">
    <a href="{{ url('ListaProfesores') }}" class="btn btn-primary ml-4">Volver</a>
    </div>

    <div class="botonregistar">
    <a href="{{ url('AgregarProfesor2') }}" class="btn btn-success mr-4">Registrar Profesores</a>
    </div>


</div>

@endsection
