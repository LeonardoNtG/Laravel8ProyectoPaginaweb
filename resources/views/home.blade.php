@extends('layouts.plantilla')

@section('title', 'Cursos C#')

@section('content')
    

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="#">LOGO</a>

      <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="home"> INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mapa">UBICACION</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href='cursos/info'>ACERCA DE</a>
        </li>
      </ul>
    </nav>
    <div
    class="coverm d-flex justify-content-center align-items-center flex-column">

  <h1 class="h12">Hola y Bienvenido</h1>
<p class="h12-2">¿Que desea hacer?</p>

<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <a href='cursos/create'>
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary btn-lg">Crear un Curso</button>
  </a>
  </div>
  <div class="btn-group me-2" role="group" aria-label="Second group">
    <a href='cursos'>
    <button type="button"  class="btn btn-secondary btn-lg">Comenzar un Curso</button>
    </a>
  </div>

  </div>
  </header>
  <div class="">
  <h2 class="info-crsd-inline p-2 bg-primary text-white">Aqui hay unos ejemplos de los cursos que proveemos! </h2>
  </div>
  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
        <div class="card">
         <img src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_descarga.png?v=1637997663832" 
          class="card-img-top" 
          alt="html desarollo web"/>
          <div class="card-body">
           <h5 class="card-title">Cursos HTML</h5>
           <p class="card-text">Puedes entrar a cursos orientados a desarrolos de paginas web, puedes iniciar ahora mismo si lo deseas y llevarlo a tu ritmo</p>
           <a href="#" class="btn btn-primary">Llevame!</a>
         </div>
       </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
          <div class="card-body">
  
           <img src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_images.png?v=1637997874932" 
           class="card-img-top" 
           alt="Css estructuracion web"/>
           <div class="card-body">
             <h5 class="card-title">Cursos CSS</h5>
             <p class="card-text">Encunetra cursos para diseñar paginas web y dar una buena impresion de estas con estilo</p>
             <a href="#" class="btn btn-primary">Llevame!</a>
           </div>
         </div>
      </div>

         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
         <div class="card" style="width: 18rem;">
    
          <img src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_csharp_api1.jpg?v=1637998001428" class="card-img-top" alt="html desarollo web">
           <div class="card-body">
           <h5 class="card-title">Cursos C#</h5>
           <p class="card-text">Apredene de uno de los lenguajes clasicos de programacion, diseña codifica y desarrolla</p>
           <a href="#" class="btn btn-primary">Llevame!</a>
          </div>
       </div>
      </div>
     </div>
    </div>
  </section>

@endsection
    

