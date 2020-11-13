 @props(['name',
        'count',
        'background',
        'categoryName',
        'categoryId'
])

<div class="col-12 col-lg-2 mx-1 my-3">
    <a href="{{ route('category.announcements',[
            $categoryName,
            $categoryId]) }}" class="d-block w-100 h-100 neumorphism singleCategory bg-{{ $name }}">
      <span class="fa-stack fa-2x">
        
        <img src="{{ asset('/media/logo-bianco.png')}}" alt="" class="img-fluid">
      </span>
      <p class="mt-3 mb-1 txt-shadow">{{ $name }}</p>
      <p class="text-white font-weight-bold"><span class="font-italic">{{ __('ui.annunci') }}:</span> {{ $count }}</p> 
    </a>
</div> 