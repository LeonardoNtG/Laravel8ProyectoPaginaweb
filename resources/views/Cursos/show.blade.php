@extends('layouts.plantilla')

@section('title', 'Cursos C#')

@section('content')

  <body>
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
        style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_florian-olivo-4hbj-eymz1o-unsplash.jpg?v=1636531325366)"
      >
        <h1 class="h1ff">
          Cursos de programacion
        </h1>
        <p>
          Cursos totalmente gratis disponibles solo aqui
        </p>
        <button class="btn btn-secondary">
          Ver más
        </button>
      </div>
    </header>
    <section>
      <div class="container mt-5 mb-5">
        <img
          src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_ferenc-almasi-eypcldxhvb0-unsplash.jpg?v=1636531964099"
          alt="codigos"
          height="250"
          class="float-right ml-4"
        />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae
          ligula placerat, maximus dolor sit amet, posuere ipsum. Pellentesque
          habitant morbi tristique senectus et netus et malesuada fames ac
          turpis egestas. Proin sit amet fermentum sem. Ut molestie mollis risus
          et tempor. Maecenas accumsan, dolor eget molestie porta, tellus ipsum
          lacinia sapien, eu elementum felis ligula sit amet lectus. Nulla
          volutpat nibh id nisl luctus, vitae ornare turpis iaculis. In hac
          habitasse platea dictumst.
        </p>
        <p>
          Mauris sodales libero non justo ornare maximus. Vestibulum at leo
          velit. Curabitur neque urna, rhoncus ut ipsum eu, dignissim molestie
          elit. Ut ac nisl nec urna euismod feugiat. Integer tempor nisl vel
          tempus euismod. Cras ullamcorper mauris ut lacus rhoncus, sed semper
          dolor malesuada. Fusce lacinia tincidunt nisi, eu suscipit enim
          egestas vitae. Quisque laoreet elementum turpis. Praesent dignissim,
          purus vitae vulputate ultricies, quam augue tempus odio, et rutrum
          elit purus ac odio. Cras mattis rutrum orci eu condimentum. Aliquam
          erat volutpat. Phasellus vitae purus tortor. Quisque mauris libero,
          efficitur non neque vel, mattis cursus turpis.
        </p>
      </div>
    </section>
    <section>
      <div id="myCarousel" class="container mt-5 mb-5 carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fpankaj-patel-Fi-GJaLRGKc-unsplash.jpg?v=1636532972189" alt="">
            </div>
            <div class="item">
                <img src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fjames-harrison-vpOeXr5wmR4-unsplash.jpg?v=1636532973045" alt="">
            </div>
            <div class="item">
                <img src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fkarl-pawlowicz-QUHuwyNgSA0-unsplash.jpg?v=1636532972482" alt="">
            </div>
        </div>
    
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </section>
    @endsection
