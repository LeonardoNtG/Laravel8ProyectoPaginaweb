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
    <div
    class="cover d-flex justify-content-end align-items-start p-5 flex-column p-5"
    style="background-image:url(https://img.olhardigital.com.br/wp-content/uploads/2021/08/curso-online-1000x450.jpg)"
  >
    <h1 class="h1ff ">
      Crea tus cursos y registralos!
    </h1>
  </div>
</header>

<form action="{{ route('cursos.storage') }}" method="POST" >
  @csrf
  <div class="form-group">
<label> Nombre </label>
<input type="text" class="form-control" name="Nombre" >
<br>
  </div>

<div class="form-group">
<label> Descripcion </label>
<textarea type="textarea" class="form-control" name="Descripcion" row="5" ></textarea>
<br>
</div>
<div class="form-group">
<label> Categorias </label>
<input type="text" class="form-control" name="Categorias" >
</div>
<br>

<input type="submit" class="btn btn-success d-inline" value="Enviar">
<br>
<br>

<a href="{{url('/cursos/created')}}" class="btn btn-primary">Ver cursos ingresados</a>
<br>
<br>
<a href="{{url('/home')}}" class="btn btn-success">Volver al menu principal</a>
</form>
@endsection
