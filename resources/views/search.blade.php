<x-app>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12">
                <h1>Risultati Ricerca per: {{ $q }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row flex-nowrap overflow-auto">
            
            @foreach ($announcements as $announcement)
            <x-card
              title="{{ $announcement['title'] }}"
              body="{{ $announcement['body'] }}"
              categoryName="{{ $announcement->category->name }}"
              categoryId="{{ $announcement->category->id }}"
              createdAt="{{ $announcement->created_at->format('d/m/y')  }}"
              userName="{{ $announcement->user->name }}"
              /> 
            @endforeach
            
        </div>
    </div>


</x-app>