
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
            <a class="nav-link" href="#mapa">UBICACION</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href='cursos/info'>ACERCA DE</a>
          </li>
        </ul>
      </nav>
      <div
        class="cover d-flex justify-content-center align-items-center flex-column"
      >
      <h1 class="h1ff">
        Cursos de programacion
      </h1>
      <p>
        Cursos totalmente gratis disponibles solo aqui
      </p>
      <button class="btn btn-primary">
        Ver más
      </button>
      </div>
    </header>
    <section>
      <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <div
                title="hombre en computadora"
                class="cover cover-small"
                style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_programmer-g700d27901_1280.png?v=1636436644016)"
              ></div>
              <div class="card-body">
                <h5 class="card-title">Aprende a programar</h5>
                <p class="card-text">
                  No tengas miedo por aprender cosas nuevas
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <div
                title="multipantallas"
                class="cover cover-small"
                style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_video-conference-g36b1604c8_1920.jpg?v=1636437883858)"
              ></div>
              <div class="card-body">
                <h5 class="card-title">Publica tus proyectos</h5>
                <p class="card-text">
                  Comparte con la comunidad tus proyectos y conversa con otras
                  personas
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <div
                title="grupo de personas"
                class="cover cover-small"
                style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Frsz_social-media-g5f24802d3_1920.png?v=1636438534646);"
              ></div>
              <div class="card-body">
                <h5 class="card-title">Ayuda a otros desarrolladores</h5>
                <p class="card-text">
                  Interactua con desarrolladores que publiquen sus trabajos
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-5">
            <img
              src="https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fundraw_developer_activity_re_39tg.svg?v=1636523355577"
            />
          </div>
          <div class="col-12 col-sm-6">
            <h3>
              ¡Que esperas, unete y aprende a programar!
            </h3>
            <p>
              Sumergete en el mundo de la programacion
            </p>
            <a href="#mapa">Ir al mapa</a> 
          </div>
        </div>
        <form action="">
          <label for="email">Deseas saber mas? usa tu Correo Electronico!</label>
          <div class="d-flex">
            <div class="flex-fill mr-2">
              <input type="email" id="email" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </section>

  </div>
    <section>
      <!--Primer recuadro -->
      <div class="container mt-5 mb-5">
        <div class="product-stripe">
          <div class="stripe-container">
          <div class="card">
            <div
              title="Codigo"
              class="cover cover-small"
              style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fhtml-154434.jpg?v=1636525525810)"
            ></div>
            <div class="card-body">
              <h5 class="card-title">Aprende HTML</h5>
             
              

            </div>
          </div>
          <!--segundo recuadro -->
          <div class="card">
            <div
              title="hombre en computadora"
              class="cover cover-small"
              style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fcss-27192_1280.jpg?v=1636525525472)"
            ></div>
            <div class="card-body">
              <h5 class="card-title">Aprende CSS</h5>
            
            </div>
          </div>
          <!-- tercer recuadro-->
          <div class="card">
            <div
              title="hombre en computadora"
              class="cover cover-small"
              style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Fbackend-4496461_1280.jpg?v=1636525525479)"
            ></div>
            <div class="card-body">
              <h5 class="card-title">Edita codigos ya existentes</h5>
            
            </div>
          </div>
          <!--cuarto recuadro -->
          <div class="card">
            <div
              title="hombre en computadora"
              class="cover cover-small"
              style="background-image:url(https://cdn.glitch.me/e70ffee1-88e5-44a0-8c9c-7ed99c37872c%2Ffrontend-4342425_1280.jpg?v=1636525525473)"
            ></div>
            <div class="card-body">
              <h5 class="card-title">Comparte con la comunidad</h5>
             
            </div>
          </div>
      </div>
        </div>
      </div>
    </section>
    <section>
    <div class="container mt-5 mb-5 text-center" id="mapa">
      <h4>
        Encuentranos aqui:
      </h4>
      <p>
        Contiguo a la subestación de ENEL, Estelí 31000
      </p>
      <div class="responsive-iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.984487082465!2d-86.37052568569445!3d13.100169215589782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f718c57866892dd%3A0xb23ca385a77b0c03!2sUNAN-FAREM%20Estel%C3%AD%20(Recinto%20universitario%20Leonel%20Rugama)!5e0!3m2!1ses!2sni!4v1636528056268!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>     
     

    </div>
      </div>
    </section>
  @endsection
