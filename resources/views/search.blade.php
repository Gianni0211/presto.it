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

          <x-card :announcement="$announcement"  />
       
          @endforeach
          
        </div>
    </div>


</x-app>