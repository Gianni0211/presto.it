
<nav id="navbar" class="navbar fixed-top  navbar-expand-lg bg-trasparent py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img id="navbarBrand" src="./Media/logo.png" width="190" height="80" class="img-fluid" alt="presto.it"/>
        </a>
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle title-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorie
                    </a> --}}
                    <button type="button" class="btn btn-white mx-5 font-weight-bold text-muted" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-tags"></i>
                        Categorie
                      </button>
                      </div>
                    {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach ($categories as $category)
                        <a href="{{ route('category.announcements', [
                        $category->name,
                        $category->id
                        ]) }}" class="nav-link">{{ $category->name }}</a>
                        @endforeach

                    </div>
                </li> --}}
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <ul class="navbar-nav mr-right">
                    <li class="nav-item mr-3">
                        <a class="nav-link bg-yellow text-white rounded btn-hover" href="{{ route('announcement.new') }}">Inserisci annuncio  <i class="fas fa-plus"></i></a>
                    </li>
                </ul>
                <!-- Authentication Links -->
                @guest
                <li class="nav-item mr-3">
                    <a class="nav-link title-primary rounded border-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item mr-3">
                    <a class="nav-link title-primary rounded border-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>


{{-- <nav id="navbar" class="navbar fixed-top  navbar-expand-lg bg-trasparent">
    <a class="navbar-brand" href="#">
      <img id="navbarBrand" src="./Media/logo.png" width="190" height="80" class="img-fluid" alt="cerco-fatto.it"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCercoFatto" aria-controls="navbarCercoFatto" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon bg-orange"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarCercoFatto">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link title-primary" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link title-primary" href="#">Link1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link title-primary" href="#">Link2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link title-primary" href="#">Link3</a>
      </li>
    </ul>
  </div>
  <div class="mr-sm-5">
    <a data-toggle="modal" data-target="#exampleModal" class="float-right user" title="Area Utenti" >
        <span class="fa-stack title-primary">
        <i class="fas fa-square fa-stack-2x"></i>
        <i class="fas fa-user fa-stack-1x fa-inverse"></i>
        </span>
    </a>
    </div>
</nav> --}}