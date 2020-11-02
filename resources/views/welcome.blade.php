<x-app>

<x-header 
title="Presto.it"
body="Il miglior sito di annunci"
/>

<div class="container my-5 py-5">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="txtTitle font-weight-bold">Gli ultimi annunci</h1>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">

        @foreach ($announcements as $announcement)

  <x-card
        title="{{ $announcement['title'] }}"
        body="{{ $announcement['body'] }}"
        categoryName="{{ $announcement->category->name }}"
        categoryId="{{ $announcement->category->id }}"
        createdAt="{{ $announcement->created_at->format('d/m/y')  }}"
        userName="{{ $announcement->user->name }}"
        
        />

   {{--  <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header">
                {{ $announcement->title }}
                <div class="card-body">
                    <p>
                        <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt=""> {{ $announcement->body }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Category: <a href="{{ route('category.announcements',[
                        $announcement->category->name,
                        $announcement->category->id]) }}">
                        {{ $announcement->category->name }}</a></strong>
                    <i>{{ $announcement->created_at->format('d/m/y') }} - {{$announcement->user->name}}</i>
                </div>
            </div>
        </div>
    </div> --}}

    
@endforeach
    </div>
</div>




</x-app>