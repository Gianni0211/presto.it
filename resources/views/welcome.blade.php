<x-app>


<header class="header overlay">
  <div class="container-fluid h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-7 col-md-6 text-center text-white">
        
      
      @if(session('access.denied.revisor.only'))
        <div>
        Accesso non consentito - solo per revisori
        </div>
      @endif

        
        <h1 class=" text-white font-weight-bold display-4 txt-shadow mb-5 d-inline txt-shadow" > {{ __('ui.payOf') }}</h1>
      
      <div class="search-box-layout1 mt-5 rounded">
        <form class="form-inline" method="GET" action="{{ route('search') }}">
          <input class="form-control input-search" name="q" type="search" placeholder="{{ __('ui.searchFor') }}" aria-label="Search">
          <button class="bg-orange my-2 my-sm-0 btn-search text-white border-0 rounded" type="submit">
            <i class="fas fa-search txt-shadow"></i> <span class="txt-shadow">{{ __('ui.search') }}</span>
          </button>
        </form>

      </div>

    </div>
  </div>
</div>

</header>




{{-- SEZIONE CATEGORIE CARD --}}

    <section class="container text-center mb-5" id="HomeCategories">
      <div class="row py-5">
        <div class="col">
          <h2 class="txtTitle h1 font-italic">{{ __('ui.explore') }}</h2>
        </div>
      </div>

      <div class="row justify-content-between">
        @foreach ($categories as $category)
            <x-category-card 
            name="{{ $category->name }}"
            count="{{ $category->announcementCount() }}"
            categoryName="{{ $category->name }}"
            categoryId="{{ $category->id }}"
            />
        @endforeach
      </div>

    </section>





{{-- SEZIONE NEWS LETTER --}}

    <div class="container-fluid py-3 overflowSliderBG">
      <div class="container">

      <section id="overflowSlider" class="w-100">
        <div class="row py-5">
          <div class="col">
            <h2 class="txtTitle font-italic h1 text-center">{{ __('ui.mostPopular') }}</h2>
          </div>
        </div>
        
        <div class="row flex-nowrap overflow-auto">
          
          @foreach ($announcements as $announcement)

          <x-card :announcement="$announcement"  />
       
          @endforeach
          
        </div>
      </section>
      </div>
    </div>

    {{-- newsletter --}}
    <div class="container-fluid subscribe p-5 h-100">
      <div class="container">
        <div class="row py-2">
          <div class="col-12 col-lg-12 text-center heading">
            <h3 class="title"> {{ __('ui.signup') }}</h3>
        
            <p class="title-desc">{{ __('ui.news') }}</p>
          </div>
        </div>
        <div class="row p-3">
          <div class="col-12 col lg-12 align-items-center rounded-0">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="{{ __('ui.email') }}" aria-label="Inserisci la tua e-mail" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn text-white btn-iscriviti" type="button">{{ __('ui.newsletter') }}</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      </div>
    </div>
    </div>



</x-app>