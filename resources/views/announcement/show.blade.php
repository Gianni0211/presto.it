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
                          <div class="d-flex justify-content-center">
                             <img src="{{ $image->getUrl(700,400) }}" alt="image" class="img-fluid" >
                          </div>
                          @endforeach
                     
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="slider-nav mt-4">
                           @foreach($announcement->images as $image)
                           <div class="p-3">
                               <img src="{{ $image->getUrl(300,150) }}" alt="image" class="img-fluid" >
                           </div>
                           @endforeach     
                    </div>
                </div>
                {{-- end slick carouserl --}}
                

            </div>
              

            <div class="container">
              <div class="row p-3 my-4">
                <div class="col-12 col-md-6">
                  <h3 class="title-primary">{{ $announcement->title }}</h3>
                  <p class="lead mt-3">
                      {{ $announcement->body }}
                  </p> 
                </div>
              </div>
            </div>

          </div>
          
        

{{-- articoli correlati per categoria --}}


                <div class="container-fluid py-3 overflowSliderBG">
                
                    <section id="overflowSlider" class="w-100">
                              <div class="row py-5">
                                  <div class="col">
                                      <h2 class="txtTitle font-italic h1 text-center">{{ __('ui.correlati') }}</h2>
                                  </div>
                              </div>
                              
                    <div class="row flex-nowrap overflow-auto">
                                      
                        @foreach ($announcement->category->announcements as $announcement)
                        <x-card 
                        :announcement="$announcement"
                          /> 
                        @endforeach
                        
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