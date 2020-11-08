<x-app>

    <x-header 

title="{{ $category->name }}"

/>
    {{-- <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Annunci per categoria: {{ $category->name }}</h1>
            </div>
        </div>
    </div> --}}
    
    
    <div class="container-fluid py-3 overflowSliderBG">{{--  fix carta categorie --}}
        <div class="container">
            
            <section id="overflowSlider" class="w-100">
                <div class="row py-5">
                    <div class="col">
                        <h2 class="txtTitle font-italic h1 text-center">In evidenza</h2>
                    </div>
                </div>
                
            <div class="row flex-nowrap overflow-auto">
                    
                <x-sidebar-category />
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
   

   

   <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{ $announcements->links() }}
        </div>
    </div> 

</x-app>