<x-app>
    
    
    <x-header 
    title="{{ $announcement->title }}"
    />
    

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-9 ">
          
            
            
            <div class="body-ann">
            
                <!-- slick carousel  -->
                <div class="row">
                    <div class="col-12">
                        <div class="slider-for">
                        
                           
                          @foreach($announcement->images as $image)
                          <div>
                          <img src="{{ $image->getUrl(900,600) }}" alt="porco" class="img-fluid" >
                          </div>
                          @endforeach


                            
                            
                            
                         
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="slider-nav mt-4">
                              @foreach($announcement->images as $image)
                                <div class="px-3">
                                <img src="{{ $image->getUrl(300,150) }}" alt="porco" class="img-fluid" >
                                </div>
                                @endforeach


                           
                           
                            
                            
                            
                            
                        </div>

                    </div>
                </div>
                {{-- end slick carouserl --}}
                
                
                <div class="row p-3 my-4">
                    <h3 class="title-primary">{{ $announcement->title }}</h3>
                    <p class="lead mt-3">
                        {{ $announcement->body }}
                    </p> 
                </div>

            </div>
            
            {{-- <div class="description mt-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active nav-description" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Dettagli annuncio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-dettagli" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false">Dettagli</a>
                    </li>
                </ul>
                <div class="tab-content p-2 mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p class="lead">
                            probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                            cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                            keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                            placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                            qui.
                        </p> 
                        <p class="lead">
                            probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                            cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                            keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                            placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                            qui.
                        </p> 

                </div>

                    </div> --}}
                        
            {{-- </div>


            </div> --}}

                {{-- articoli correlati per categoria --}}
                <div class="container py-3">
                    <section id="overflowSlider" class="w-100">
                      <div class="row py-5">
                        <div class="col">
                          <h2 class="txtTitle font-italic h1 text-center">{{__('ui.correlati')}}</h2>
                        </div>
                      </div>
                      



                      <div class="row flex-nowrap overflow-auto px-5">
                        
                        <div class="col-6 col-md-6 my-3 p-3">
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
                        

                     
                        
                      </div>
                    </section>
                </div>
                {{-- end articoli correlati per categoria --}}
                
                
                
        </div> 
        <x-sidebar-single
        :announcement="$announcement"
        />
                
    </div>
</div>


</x-app>