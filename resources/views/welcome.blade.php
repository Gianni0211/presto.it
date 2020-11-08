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

        <img src="{{ asset ('/media/prova.png') }}" alt="" class="img-fluid" width="150">
        <h1 class="title-primary font-weight-bold display-4 logo txt-shadow mb-5 d-inline" > presto.it </h1>
      
      <div class="search-box-layout1 mt-4">
        <form method="GET" action="{{ route('search') }}">
          <div class="row no-gutters justify-content-center align-items-center">
            

      <!-- Button trigger modal -->

            <div class="dropdown input-search-btn">
               <button type="button" class="btn btn-white mx-5 font-weight-bold text-muted" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-tags"></i>
                Categorie
                </button>
            </div>

            


            <div class="col-lg-4 form-group">
              <div class="input-search-btn search-keyword">
                <i class="fas fa-text-width"></i>
                <input
                type="text"
                class="form-control"
                placeholder="Cerca per parola ..."
                name="q"
                kl_vkbd_parsed="true"
                />
              </div>
            </div>
            <div class="col-lg-2 form-group overflow-hidden">
              <button type="submit" class="submit-btn">
                <i class="fas fa-search txt-shadow"></i> <span class="txt-shadow">cerca</span> 
              </button>
            </div>
          </div>
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
          <h2 class="txtTitle h1 font-italic">Esplora le nostre sezioni</h2>
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
            <h2 class="txtTitle font-italic h1 text-center">In evidenza</h2>
          </div>
        </div>
        
        <div class="row flex-nowrap overflow-auto">
          
          @foreach ($announcements as $announcement)
          <x-card
            title="{{ $announcement['title'] }}"
            body="{{ Str::limit($announcement['body'], 50, $end='...') }}"
            categoryName="{{ $announcement->category->name }}"
            categoryId="{{ $announcement->category->id }}"
            createdAt="{{ $announcement->created_at->format('d/m/y')  }}"
            userName="{{ $announcement->user->name }}"
            img="{{ Storage::url($announcement->img) }}"
            price="{{ $announcement->price }}"
            /> 
          @endforeach
          
        </div>
      </section>
      </div>
    </div>

    <div class="container-fluid subscribe p-5 h-100">
      <div class="container">
        <div class="row py-2">
          <div class="col-12 col-lg-12 text-center heading">
            <h3 class="title"> Iscriviti a presto.it</h3>
        
            <p class="title-desc">Riceverai tutte le news su nuovi annunci e offerte dedicate a te</p>
          </div>
        </div>
        <div class="row p-3">
          <div class="col-12 col lg-12 align-items-center rounded-0">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Inserisci la tua e-mail" aria-label="Inserisci la tua e-mail" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn text-white btn-iscriviti" type="button">Iscriviti alla newsletter</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      </div>
    </div>
    </div>



</x-app>