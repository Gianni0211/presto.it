<x-app>

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Annunci per categoria: {{ $category->name }}</h1>
            </div>
        </div>
    </div>

    @foreach ($announcements as $announcement)
    <div class="row justify-content-center mb-5">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $announcement->title }}
                </div>
                <div class="card-body">
                    <p>
                        <img src="https://via.placeholder.com/300x153.png" class="rounded float-right" alt="">
                        {{ $announcement->body }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Category: <a href="{{ route('category.announcements',[
                        $announcement->category->name,
                        $announcement->category->id]) }}">
                        {{ $announcement->category->name }}</a></strong>
                    <i>{{ $announcement->created_at->format('d/m/y') }} - {{ $announcement->user->name }}</i>
                </div>
            </div>
        </div>
    </div>     
     {{-- <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{ $announcement->links() }}
        </div> --}}
    @endforeach

 {{--    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{ $announcement->links() }}
        </div>
    </div> --}}

</x-app>