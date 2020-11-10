<div class="col-12 col-md-12 col-lg-3">
    <div class="row">

        
            
        <div class="category-box-layout2">
            <div class="item-heading-area">
                
                <h3 class="item-title">Categorie</h3>
            </div>
            
            <ul class="item-sub-category">

                @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category.announcements', [
                  $category->name,
                  $category->id
                   ]) }}">{{ $category->name }}   ( {{ $category->announcementCount() }})</a>
                </li>
                    
                @endforeach
               
            </ul>
        </div>
    
    </div>
    
</div>