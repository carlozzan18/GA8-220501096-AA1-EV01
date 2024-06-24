
<html>
    <head>
        <title>Rockola - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-brand container-fluid bg-white rounded w-75 mx-auto">
            <div class="container-fluid">
              <a class="navbar-brand" href="/#">
                <img src="src/assets/images/rockola.png" alt="" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Canciones
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#canlistar">Listado</a></li>

                    </ul>

                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Albums
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#alblistar">Listado</a></li>



                  </li>
                </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Géneros
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{route('genero.files.index')}}">Listado</a></li>
                    <li>
                      <a class="dropdown-item" href="{{route('genero.files.create')}}">Crear</a>
                    </li>


                  </ul>

                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Artistas
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('interprete.files.index')}}">Listado</a></li>

                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('interprete.files.create')}}">Crear</a>
                    </li>

                  </ul>



                </ul>
                <span class="navbar-text"> <a href="#welcome">Iniciar sesión</a> </span>
              </div>
            </div>
          </nav>

          @yield('contenido')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
