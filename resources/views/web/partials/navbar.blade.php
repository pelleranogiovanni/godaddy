<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="{{route('blog')}}">COOPERATIVA LADRILLEROS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}">Noticias <span class="sr-only">(current)</span></a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('acerca')}}">Conocenos</a>
          </li>
          <li class="nav-item"> --}}
            <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-md-0 mr-2">
          <input class="form-control" type="text" placeholder="Buscar">
        </form>

        <div class="d-none d-md-block">
        <button type="button" class="btn btn-dark"><i class="fas fa-search ml-1"></i></button> 
        </div>
      </div>
    </nav>