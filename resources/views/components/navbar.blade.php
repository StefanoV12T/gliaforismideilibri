<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <a class="navbar-brand" href={{route('welcome')}}> <img class="nav-image" src="{!! asset('favicon5.ico') !!}" alt=""> Gli aforismi dei libri</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{route('welcome')}}>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('all-reviews')}}">Recensioni</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cerca per Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category )
              <li><a class="dropdown-item" href="{{route('categories-searched', $category)}}">{{$category->name}}</a></li>  
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
          @guest
          
              <a class="nav-link nav-item me-2" href="{{ route('login') }}">Login</a>
          
          
              <a class="nav-link nav-item me-2" href="{{ route('register') }}">Registrati</a>
          
        @else
          <div class="nav-item dropdown me-2">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="">Esci
                      </button>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
        
          <li class="nav-item dropdown btn btn-warning py-2 me-2 my-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menù recensore
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item py-0" href={{route('categories.create')}}>Crea categoria</a></li>
              <hr>
              <li><a class="dropdown-item py-0" href={{route('create-review')}}>Scrivi recensione</a></li>
              <hr>
              <li><a class="dropdown-item py-0" href={{route('categories.index')}}>Gestisci Categorie</a></li>
            </ul>
          </li>
          @endguest
        </ul>
        <form class="d-flex " role="search">
          <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>