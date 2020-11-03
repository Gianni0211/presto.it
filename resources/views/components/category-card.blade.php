@props(['name',
        'count',
        'background',
])

<div class="col-md-2 mx-1 my-3">
    <a href="#" class="d-block w-100 h-100 neumorphism singleCategory bg-{{ $name }}">
      <span class="fa-stack fa-2x border-b">
        {{-- <i class="fas fa-circle fa-stack-2x"></i> --}}
        <i class="fas fa-building fa-stack-1x text-white"></i>
      </span>
      <p class="mt-3 mb-1 txt-shadow">{{ $name }}</p>
      <p class="text-white font-weight-bold"><span class="font-italic">Annunci:</span> {{ $count }}</p> 
    </a>
  </div>