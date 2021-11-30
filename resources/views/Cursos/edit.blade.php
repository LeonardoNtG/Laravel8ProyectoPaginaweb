

@extends('layouts.plantilla')

@section('title', 'Cursos C#')

@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="#">LOGO</a>

      <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="#"> INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mapa">UBICACION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='cursos/info'>ACERCA DE</a>
        </li>
      </ul>
    </nav>
</header>

<form action="{{url('/cursos/'.$curso->id)}}" method="post">
@csrf
{{method_field('PATCH')}}

@include('cursos.form')
    
</form>
@endsection