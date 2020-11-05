<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  <!-- cdn slick carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
  <div id="app">
    
    <x-nav />
    
    <main class="">
      {{ $slot }}
    </main>
    
    <x-footer />
    
  </div>
  
  
  
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
    
    
    <div class="modal-content">
      <div class="modal-header bg-orange">
        <h5 class="modal-title text-white text-uppercase offset-3 font-italic font-weight-bold"></i>seleziona la categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach ($categories as $category)
        <a href="{{ route('category.announcements', [
        $category->name,
        $category->id
        ]) }}" class="nav-link border-{{ $category->name }} my-2 txtTitle"><span class="text-modal">{{ $category->name }}</span></a>    
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="bg-yellow border-0 text-white p-2" data-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>



{{-- script fontawesome --}}
<script src="https://kit.fontawesome.com/22648a38fc.js" crossorigin="anonymous"></script>

<!-- Scripts mio -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
