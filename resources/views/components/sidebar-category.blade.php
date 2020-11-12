<div class="col-12 col-md-12 col-lg-3">
   
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
                        <div class="col-12 mt-4">
                            <a class="nav-link bg-yellow text-white rounded btn-hover text-center lead" href="{{ route('announcement.new') }}">{{ __('ui.add') }}  {{-- <i class="fas fa-plus"></i> --}}</a>
                        </div>
   
    
</div>