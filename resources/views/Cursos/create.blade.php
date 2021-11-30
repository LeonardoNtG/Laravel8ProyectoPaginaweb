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

<h1>Crea tus cursos </h1>
<br>

</div>
<a href="{{url('/cursos/created')}}">Ver cursos ingresados</a>

<form action="{{ route('cursos.storage') }}" method="POST" >
    @csrf
@include('cursos.form')
    
</form>
<br>
<a href="{{url('/home')}}" class="btn btn-success">Volver al menu principal</a>

@endsection