<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

</head>
<body>
   <!--header-->
   <!-- nav -->
   
  @yield('content')

   <!-- footer -->
   
   <footer class="feet footer-seccion-main">
     
     @copyright 2021 CursosCode
   
    </footer>
   
   <!-- script -->
</body>
</html>