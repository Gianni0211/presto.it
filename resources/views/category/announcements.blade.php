<x-app>

    <x-header 

title="{{ $category->name }}"

/>
    
    
    

<div class="container mb-5">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="search-box-layout1 mb-4 rounded">
                <form class="form-inline" method="GET" action="{{ route('search') }}">
                  <input class="form-control input-search" name="q" type="search" placeholder="{{ __('ui.searchFor') }}" aria-label="Search">
                  <button class="bg-orange my-2 my-sm-0 btn-search text-white border-0 rounded" type="submit">
                    <i class="fas fa-search txt-shadow"></i> <span class="txt-shadow">{{ __('ui.search') }}</span>
                  </button>
                </form>
              </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="category-box-layout2">
                <div class="item-heading-area">
                    
                    <h3 class="item-title text-white">Categorie</h3>
                </div>
                
                <ul class="item-sub-category">
    
                    @foreach ($categories as $category)
                    <li class="mb-3">
                        <a class="text-decoration-none txtTitle hover-a" href="{{ route('category.announcements', [
                      $category->name,
                      $category->id
                       ]) }}">{{ $category->name }}   ( {{ $category->announcementCount() }})</a>
                    </li>
                        
                    @endforeach
                   
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-9">
            
          <div class="row">
              @foreach ($announcements as $announcement)
              <x-card 
               :announcement="$announcement"
                /> 
              @endforeach
            </div>
          
        </div>
    </div>
</div>



        {{-- <div class="container py-3 mt-5">
            
            <div class="row flex-nowrap overflow-auto">
                
                <x-sidebar-category />
                    <section id="overflowSlider" class="w-100">
                        <div class="search-box-layout1 mb-4 rounded">
                            <form class="form-inline" method="GET" action="{{ route('search') }}">
                              <input class="form-control input-search" name="q" type="search" placeholder="{{ __('ui.searchFor') }}" aria-label="Search">
                              <button class="bg-orange my-2 my-sm-0 btn-search text-white border-0 rounded" type="submit">
                                <i class="fas fa-search txt-shadow"></i> <span class="txt-shadow">{{ __('ui.search') }}</span>
                              </button>
                            </form>
                    
                          </div>
          @foreach ($announcements as $announcement)
          <x-card 
           :announcement="$announcement"
            /> 
          @endforeach
          
        </div>
      </section>
      </div>
    
   

   

   <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{ $announcements->links() }}
        </div>
    </div>  --}}

</x-app>