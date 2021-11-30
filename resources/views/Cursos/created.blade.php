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
          <a class="nav-link" href="{{url('/home')}}">UBICACION</a>
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
    Revisa los cursos que has regitrado aqui!
  </h1>
  <br>
  
</header>

<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Categorias</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <br><br>
  <a href="{{url('/cursos/create')}}" class="btn btn-success">Ingresar un nuevo curso</a>
  <br>
    <br>
   <br>
 
  <tbody>

    @foreach ($cursos as $curso)
        
    <tr>
      <td>{{$curso->id}}</td>
      <td>{{$curso->Nombre}}</td>
      <td>{{$curso->Descripcion}}</td>
      <td>{{$curso->Categorias}}</td> 
      <td>
        <a href="{{url('/cursos/'.$curso->id.'/edit/') }}" class="btn btn-warning">
        Editar 
        </a>
        <form action="{{ url('/cursos/'.$curso->id)}}" class="d-inline" method="POST">
          @csrf
        {{method_field('DELETE')}}
        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas Borrar?')" value="Borrar">
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
  <a href="{{url('/home')}}" class="btn btn-success">Volver al menu principal</a>
</table>


@endsection