<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href={{route('welcome')}}> <img class="nav-image" src="{!! asset('favicon5.ico') !!}" alt=""> Gli aforismi dei libri</a>
    <a class="navbar-toggler btn border-0 p-0" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="{{asset('img/bookstack_libr_3024.ico') }}" alt="" class="book-toogle-icon">
    {{-- <span class="navbar-toggler-icon"></span> --}}
    </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-0 mb-lg-0">
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
          {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
          @guest
            <li class="nav-item navbar-nav"><a class="nav-link nav-item me-1" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item navbar-nav"><a class="nav-link me-4" href="{{ route('register') }}">Registrati</a></li>
          @else
          <li class="nav-item navbar-nav">
            <div class="nav-item dropdown me-2">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</a>
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
          </li>
          @if(auth()->user()->is_reviewer)
          <li class="nav-item navbar-nav">
            <li class="nav-item dropdown btn btn-dark py-2 me-2 my-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menù recensore</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item py-0" href={{route('categories.create')}}>Crea categoria</a></li>
                <hr>
                <li><a class="dropdown-item py-0" href={{route('create-review')}}>Scrivi recensione</a></li>
                <hr>
                <li><a class="dropdown-item py-0" href={{route('categories.index')}}>Gestisci Categorie</a></li>
              </ul>
            </li>
          </li>
          @endif
          @if (auth()->user()->is_revisor)
          <li class="nav-item navbar-nav">
            <li class="nav-link">
              <a href="{{route('revisor-index')}}" class="btn btn-outline-secondary me-2 mb-lg-0 mb-2 position-relative" aria-current="page">Zona Revisore</a>
              @if (App\Models\Review::toBeRevisionedCount()>0)
                <span class="position-absolute top-5 star-100 translate-middle badge rounded-pill bg-warning text-dark ">{{App\Models\Review::toBeRevisionedCount()}}
                  <span class="visually-hidden">unread message</span>
                </span>               
              @endif
            </li>
          </li>
          @endif
          @endguest
        <form class="d-flex " role="search">
          <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Cerca</button>
        </form>
      </div>
  </div>
</nav>