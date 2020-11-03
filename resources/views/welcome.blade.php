<x-app>

    {{-- <x-header 
    title="Presto.it"
    body="Il miglior sito di annunci"
    />
    
    <div class="container my-5 py-5">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="txtTitle font-weight-bold">Gli ultimi annunci</h1>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">

        @foreach ($announcements as $announcement)

  <x-card
        title="{{ $announcement['title'] }}"
        body="{{ $announcement['body'] }}"
        categoryName="{{ $announcement->category->name }}"
        categoryId="{{ $announcement->category->id }}"
        createdAt="{{ $announcement->created_at->format('d/m/y')  }}"
        userName="{{ $announcement->user->name }}"
        
        /> --}}

   {{--  <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header">
                {{ $announcement->title }}
                <div class="card-body">
                    <p>
                        <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt=""> {{ $announcement->body }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Category: <a href="{{ route('category.announcements',[
                        $announcement->category->name,
                        $announcement->category->id]) }}">
                        {{ $announcement->category->name }}</a></strong>
                    <i>{{ $announcement->created_at->format('d/m/y') }} - {{$announcement->user->name}}</i>
                </div>
            </div>
        </div>
    </div> --}}

    
{{-- @endforeach
    </div>
</div> --}}

  
 

<header class="header overlay">
  <div class="container-fluid h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-12 col-md-8 text-center text-white">
        <h1 class="title-primary font-weight-bold display-4 font-italic txt-shadow mb-5" > presto.it </h1>
      {{-- <p class="lead txt-shadow font-weight-bold">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi
        deserunt ullam officia porro repellat maxime unde tempore labore
        placeat sapiente inventore.
      </p> --}}
      <div class="search-box-layout1 mt-4">
        <form action="#">
          <div class="row no-gutters">
            <div class="col-lg-3 form-group">
              <div class="input-search-btn search-location">
                <i class="fas fa-map-marker-alt"></i>
                <label>Luogo</label>
              </div>
            </div>
            <div class="col-lg-3 form-group">
              <div class="input-search-btn search-category">
                <i class="fas fa-tags"></i>
                <label>Categoria</label>
              </div>
            </div>
            <div class="col-lg-4 form-group">
              <div class="input-search-btn search-keyword">
                <i class="fas fa-text-width"></i>
                <input
                type="text"
                class="form-control"
                placeholder="Cerca per parola ..."
                name="keyword"
                kl_vkbd_parsed="true"
                />
              </div>
            </div>
            <div class="col-lg-2 form-group overflow-hidden">
              <button type="submit" class="submit-btn">
                <i class="fas fa-search txt-shadow"></i>cerca
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</header>

{{-- <section>
  <div class="container-fluid bg-grigio">
    <div class="row justify-content-center align-items-center text-center p-4">
      <div class="col-sm-12 col-md-4 mt-0">
        <div class="border-yellow">
          <i class="fas fa-shipping-fast title-primary fa-2x  mt-5 mt-md-0"></i>
          <span class="txtTitle font-italic ml-2">Spedizioni veloci in tutta Italia</span>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 mt-0">
        <div class="border-yellow">
          <i class="fas fa-wallet title-primary fa-2x mt-5 mt-md-0"></i> <span class="txtTitle font-italic ml-2">Soddisfatti o rimborsati</span>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 mt-0">
        <div>
          <i class="fas fa-headset title-primary fa-2x mt-5 mt-md-0"></i> <span class="txtTitle font-italic ml-2">Assistenza 48h/48h</span>
        </div>
      </div>
    </div>
  </div>
</section> --}}


<section class="container text-center mb-5" id="HomeCategories">
  <div class="row py-5">
    <div class="col">
      <h2 class="txtTitle h1 font-italic">Esplora le nostre sezioni</h2>
    </div>
  </div>
  <div class="row justify-content-center justify-content-center">
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-building fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Immobili</p>
        <p>7 annunci</p>
      </a>
    </div>
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-car-alt fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Veicoli</p>
        <p>13 annunci</p>
      </a>
    </div>
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-laptop fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Computer</p>
        <p>18 annunci</p>
      </a>
    </div>
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-suitcase fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Lavoro</p>
        <p>16 annunci</p>
      </a>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-book fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Libri</p>
        <p>4 annunci</p>
      </a>
    </div>
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-futbol fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Sport</p>
        <p>19 annunci</p>
      </a>
    </div>
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-paw fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Animali</p>
        <p>6 annunci</p>
      </a>
    </div>
    <div class="col-sm-3 mx-sm-0 col-md mx-1 my-3">
      <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
        <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-plus fa-stack-1x"></i>
        </span>
        <p class="mt-3 mb-1">Altro</p>
        <p>9 annunci</p>
      </a>
    </div>
  </div>
</section>

<div class="container-fluid py-3 overflowSliderBG">
  <section id="overflowSlider" class="w-100">
    <div class="row py-5">
      <div class="col">
        <h2 class="txtTitle font-italic h1 text-center">In evidenza</h2>
      </div>
    </div>
    
    <div class="row flex-nowrap overflow-auto px-5">
      
      <div class="col-6 col-md-4 my-3 p-3">
        <div class="card neumorphism">
          <div class="ofs-img-effect">
            <img class="card-img-top" src="https://picsum.photos/321/200" alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title mb-0">
              <a href="#" class="linkReset">Titolo annuncio</a>
            </h4>
            <span class="small text-uppercase">
              <a href="#" class="linkReset">Immobili</a>
            </span>
            <p class="card-text py-3 pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab nemo voluptatibus&hellip;</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="small p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class="small p-1">
                  <i class="far fa-calendar-alt"></i> 01-10-2020
                </div>
              </div>
              <a href="#" class="btn">&euro; 123</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-4 my-3 p-3">
        <div class="card neumorphism">
          <div class="ofs-img-effect">
            <img class="card-img-top" src="https://picsum.photos/320/201" alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title mb-0">
              <a href="#" class="linkReset">Titolo annuncio</a>
            </h4>
            <span class="small text-uppercase">
              <a href="#" class="linkReset">Sport</a>
            </span>
            <p class="card-text py-3 pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab nemo voluptatibus&hellip;</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="small p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class="small p-1">
                  <i class="far fa-calendar-alt"></i> 01-10-2020
                </div>
              </div>
              <a href="#" class="btn">&euro; 123</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-4 my-3 p-3">
        <div class="card neumorphism">
          <div class="ofs-img-effect">
            <img class="card-img-top" src="https://picsum.photos/321/201" alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title mb-0">
              <a href="#" class="linkReset">Titolo annuncio</a>
            </h4>
            <span class="small text-uppercase">
              <a href="#" class="linkReset">Libri</a>
            </span>
            <p class="card-text py-3 pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab nemo voluptatibus&hellip;</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="small p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class="small p-1">
                  <i class="far fa-calendar-alt"></i> 01-10-2020
                </div>
              </div>
              <a href="#" class="btn">&euro; 123</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-4 my-3 p-3">
        <div class="card neumorphism">
          <div class="ofs-img-effect">
            <img class="card-img-top" src="https://picsum.photos/322/200" alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title mb-0">
              <a href="#" class="linkReset">Titolo annuncio</a>
            </h4>
            <span class="small text-uppercase">
              <a href="#" class="linkReset">Animali</a>
            </span>
            <p class="card-text py-3 pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab nemo voluptatibus&hellip;</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="small p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class="small p-1">
                  <i class="far fa-calendar-alt"></i> 01-10-2020
                </div>
              </div>
              <a href="#" class="btn">&euro; 123</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-4 my-3 p-3">
        <div class="card neumorphism">
          <div class="ofs-img-effect">
            <img class="card-img-top" src="https://picsum.photos/320/202" alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title mb-0">
              <a href="#" class="linkReset">Titolo annuncio</a>
            </h4>
            <span class="small text-uppercase">
              <a href="#" class="linkReset">Veicoli</a>
            </span>
            <p class="card-text py-3 pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab nemo voluptatibus&hellip;</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="small p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class="small p-1">
                  <i class="far fa-calendar-alt"></i> 01-10-2020
                </div>
              </div>
              <a href="#" class="btn">&euro; 123</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-4 my-3 p-3">
        <div class="card neumorphism">
          <div class="ofs-img-effect">
            <img class="card-img-top" src="https://picsum.photos/321/202" alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title mb-0">
              <a href="#" class="linkReset">Titolo annuncio</a>
            </h4>
            <span class="small text-uppercase">
              <a href="#" class="linkReset">Altro</a>
            </span>
            <p class="card-text py-3 pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab nemo voluptatibus&hellip;</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="small p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class="small p-1">
                  <i class="far fa-calendar-alt"></i> 01-10-2020
                </div>
              </div>
              <a href="#" class="btn">&euro; 123</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
</div>

<!-- Recensioni-->

<div class="container p-3 my-3">
  <div class="row">
    <div class="card-deck">
      <div class="card shadow recensioni-card">
        <div class="card-header bg-white">
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
        </div>
        <div class="card-body">
          <p class="card-title font-italic">Saltimbanco Q.</p>
          
          <p class="card-text lead">
            Spedizione velocissima e nei tempi indicati. Merce arrivata
            senza alcun difetto e rispondente alle caratteristiche delle
            fotografie.
          </p>
        </div>
        <div class="card-footer txt-small">Last updated 3 mins ago</div>
      </div>

      <div class="card shadow recensioni-card">
        <div class="card-header bg-white">
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          
        </div>
        <div class="card-body">
          <p class="card-title font-italic">Pasticcino R.</p>
          
          <p class="card-text lead">
            Spedizione velocissima e nei tempi indicati. Merce arrivata
            senza alcun difetto e rispondente alle caratteristiche delle
            fotografie.
          </p>
        </div>
        <div class="card-footer txt-small">Last updated 3 mins ago</div>
      </div>

      <div class="card shadow recensioni-card">
        <div class="card-header bg-white">
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
        </div>
        <div class="card-body">
          <p class="card-title font-italic">Esimio T.</p>
          
          <p class="card-text lead">
            Spedizione velocissima e nei tempi indicati. Merce arrivata
            senza alcun difetto e rispondente alle caratteristiche delle
            fotografie.
          </p>
        </div>
        <div class="card-footer txt-small">Last updated 3 mins ago</div>
      </div>
      
      
    </div>
  </div>

  <div class="row mt-3">
    <div class="card-deck">
      <div class="card shadow recensioni-card">
        <div class="card-header bg-white">
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
        </div>
        <div class="card-body">
          <p class="card-title font-italic">Bauhaus Z.</p>
          
          <p class="card-text lead">
            Spedizione velocissima e nei tempi indicati. Merce arrivata
            senza alcun difetto e rispondente alle caratteristiche delle
            fotografie.
          </p>
        </div>
        <div class="card-footer txt-small">Last updated 3 mins ago</div>
      </div>

      <div class="card shadow recensioni-card">
        <div class="card-header bg-white">
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          
        </div>
        <div class="card-body">
          <p class="card-title font-italic">Casimiro F.</p>
          
          <p class="card-text lead">
            Spedizione velocissima e nei tempi indicati. Merce arrivata
            senza alcun difetto e rispondente alle caratteristiche delle
            fotografie.
          </p>
        </div>
        <div class="card-footer txt-small">Last updated 3 mins ago</div>
      </div>

      <div class="card shadow recensioni-card">
        <div class="card-header bg-white">
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
          <span><i class="fas fa-star star"></i></span>
        </div>
        <div class="card-body">
          <p class="card-title font-italic">Karl M.</p>
          
          <p class="card-text lead">
            Spedizione velocissima e nei tempi indicati. Merce arrivata
            senza alcun difetto e rispondente alle caratteristiche delle
            fotografie.
          </p>
        </div>
        <div class="card-footer txt-small">Last updated 3 mins ago</div>
      </div>
      
      
    </div>
  </div>


  
</div>

<!--Subscribe-->

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

<div class="container-fluid bg-footer py-0 my-0 px-5">
  <div class="row py-4 d-flex align-items-center ">
    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
      <h4 class="text-white font-weight-bold">Seguici sui social network!</h4>
    </div>
    
    <div class="col-12 col-md-6 col-lg-7 text-center text-md-right linkReset">             
      <a class="a fb-ic">
        <i class="fab fa-facebook-f text-white mr-4 "> </i>
      </a>
      <a class="a tw-ic">
        <i class="fab fa-twitter text-white mr-4 "> </i>
      </a>
      <a class="a gplus-ic">
        <i class="fab fa-google-plus-g text-white mr-4 "> </i>
      </a>
      <a class="a li-ic">
        <i class="fab fa-linkedin-in text-white mr-4 "> </i>
      </a>
      <a class="a ins-ic">
        <i class="fab fa-instagram text-white "> </i>
      </a>
      
    </div>
  </div>
</div>

</x-app>