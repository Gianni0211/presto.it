
<nav id="navbar" class="navbar fixed-top navbar-expand-lg bg-white">
    
        <a class="navbar-brand mt-3 mt-md-0 ml-5" href="{{ url('/') }}">
          <h1 class="logo txt-shadow">Presto.it</h1>
        </a>
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


{{-- modale categorie --}}

        <div class="collapse navbar-collapse mr-0" id="#exampleModalCenter">
            <a type="button" class="nav-link txtTitle" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fas fa-tags"></i> {{ __('ui.categories') }}</a>
        </div>


    <!-- Right Side Of Navbar -->

        <ul class="navbar-nav ml-auto pl-md-5 col-12 col-md-4 align-items-center text-left m-0 d-flex justify-content-left">

                <ul class="navbar-nav mr-right mb-md-0">
                    <li class="nav-item mr-3">
                        <a class="nav-link bg-yellow text-white rounded btn-hover text-center lead" href="{{ route('announcement.new') }}">{{ __('ui.add') }}  {{-- <i class="fas fa-plus"></i> --}}</a>
                    </li>
                </ul>

                 <div class="li nav-item">
                     
                         <form action="{{ route('local' ,'en') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link" style="background-color:transparent; border:none; ">
                <span class="flag-icon flag-icon-gb"></span>
                </button>
                
                </form>

                     
                   
                </div>

                <div class="li nav-item">
                     
                         <form action="{{ route('local' ,'it') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link" style="background-color:transparent; border:none; ">
                <span class="flag-icon flag-icon-it mr-2"></span>
                </button>
                
                </form>

                     
                   
                </div>



        <!-- Authentication Links -->
                @guest
                <li class="nav-item mr-3 mb-2 mb-md-0">
                    <a class="nav-link txtTitle rounded border-btn text-center" href="{{ route('login') }}">{{ __('ui.signIn') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item mr-3 mb-2 mb-md-0">
                    <a class="nav-link txtTitle rounded border-btn text-center" href="{{ route('register') }}">{{ __('ui.signUp') }}</a>
                </li>
                @endif
                @else
                @if (Auth::user()->is_revisor)
                <li class="nav-item mr-3">
                <a  href="{{ route('revisor.home') }}" class="text-decoration-none" >
                    <span class="badge badge-pill badge-warning d-none d-md-inline title-primary">
                        <i class="fas fa-bell title-primary"></i> {{\App\Models\Announcement::ToBeRevisionedCount()}} </span>
                </a>
                </li>
                @endif

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                       

                    @if (!Auth::user()->is_revisor)
                    <a class="dropdown-item" href="{{ route('revisor.toBerevisor') }}">
                      Diventa revisore
                    </a>
                    @else
               
                    <a class="dropdown-item text-decoration-none" href="{{ route('revisor.home') }}"
                    >Annunci in sospeso <span class="badge badge-pill badge-warning title-primary"><i class="fas fa-bell title-primary"></i> {{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
                    </a>
                    @endif
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    
</nav>


