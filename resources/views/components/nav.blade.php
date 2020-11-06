
<nav id="navbar" class="navbar fixed-top  navbar-expand-lg bg-white py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <h1 class="logo">PRESTO.IT</h1>
        </a>
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav mr-auto">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle title-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorie
                    </a> --}}
                    <a type="button" class="nav-link txtTitle" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-tags"></i>
                        Categorie
                      </a>
                      </div>
                    {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach ($categories as $category)
                        <a href="{{ route('category.announcements', [
                        $category->name,
                        $category->id
                        ]) }}" class="nav-link">{{ $category->name }}</a>
                        @endforeach

                    </div>
                </li>    
            </ul> --}}
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
                    <a class="nav-link txtTitle rounded border-btn" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item mr-3">
                    <a class="nav-link txtTitle rounded border-btn" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                </li>
                @endif
                @else
                @if (Auth::user()->is_revisor)
                <li class="nav-item mr-3">
                <a  href="{{ route('revisor.home') }}" >
                <span class="badge badge-pill badge-warning">{{\App\Models\Announcement::ToBeRevisionedCount()}} </span>
                </a>
                </li>
                @endif
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
                       

                    @if (!Auth::user()->is_revisor)
                    <a class="dropdown-item" href="{{ route('diventa.revisore') }}">
                      Diventa revisore
                    </a>
                    @else
               
                    <a class="dropdown-item" href="{{ route('revisor.home') }}"                       
                      >
                        Annunci in sospeso <span class="badge badge-pill badge-warning">{{\App\Models\Announcement::ToBeRevisionedCount()}} </span>
                    </a>
                    @endif
                    
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


