@props(['name',
        'count',
        'background',
])

<div class="col-sm-6 col-md-6 col-lg-2 mx-1 my-3 bg-{{ $name }}">
    <a href="#" class="d-block w-100 h-100 neumorphism singleCategory">
      <span class="fa-stack fa-2x">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-building fa-stack-1x"></i>
      </span>
      <p class="mt-3 mb-1">{{ $name }}</p>
      <p> <span class="txtAccent txtAccentHover">Annunci:</span>  {{ $count }}</p> 
    </a>
  </div>