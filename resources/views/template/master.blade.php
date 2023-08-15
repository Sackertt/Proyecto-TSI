<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <!-- Hoja de estilo CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Marche Pets</title>
    <style>
        
      </style>
</head>
<body class="bg-secondary">
    <div class="container-fluid" style="background: linear-gradient(to bottom, #8354a2 50%, #b7a3c9 100%);">
      <div class="row">
        <div class="col text-center">
            <a href="{{route('home.index')}}"><img class="logo-tamaño-cabeza" src="{{asset('images/Logo-MP.png')}}" alt=""></a>    
        </div>
      </div>
      <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid ">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('productos.index')}}">Catalogo</a>
                  </li>        
                  <li><a class="text-White nav-link active" href="">|</a></li>
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Agenda aqui</a>
                  </li>     
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <!-- CONTENIDO PRINCIPAL -->
    @yield('contenidoPrincipal')
    <!-- FIN CONT PRINC -->
    <div class="container-fluid text-center text-white" style="background: linear-gradient(to top, #8354a2 50%, #b7a3c9 100%);">
      <div class="row p-4">
        <div class="col-5">
          <img class="logo-tamaño" src="{{asset('images/Logo-MP.png')}}" alt="">
        </div>
        <div class="col-7">
          <div class="row">
            <div class="col mt-4"> 
              <h1 class="text-center text-white">Redes Sociales</h1>
              <a href="https://www.instagram.com/marchepets/" class="m-3"><i class="fa-brands fa-instagram fa-2xl text-white" style="color: #000000;"></i></a>
              <a href="https://wa.me/56986282531" class="m-3"><i class="fa-brands fa-whatsapp fa-2xl text-white"></i></a>
              <a href="" class="m-3"><i class="fa-brands fa-facebook fa-2xl text-white"></i></a>
            </div>
          </div>          
        </div>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/76f887c529.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>