{{-- @props(['title', 'body'])

<header class="header">
  <div class="container-fluid h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-12 col-md-8 text-center text-white">
        <h1
        class="title-primary font-weight-bold display-4 font-italic txt-shadow txtTitle"
        >
        {{ $title }}
      </h1>
      <p class="lead txt-shadow font-weight-bold">
        {{ $body }}
      </p>
    </div>
  </div>
</div>
</header> --}}

@props([
    'title'

])
<header class="header-page text-white ">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">{{$title}}</h1>
 
      </div>
    </div>
  </div>
</header>