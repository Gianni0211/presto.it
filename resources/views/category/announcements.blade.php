<x-app>

    
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Annunci per categoria: {{ $category->name }}</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            @foreach ($announcements as $announcement)
            {{-- {{ $announcement->created_at }} --}}
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

   

   

   <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{ $announcements->links() }}
        </div>
    </div> 

</x-app>