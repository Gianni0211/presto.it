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
    </div>


</x-app>