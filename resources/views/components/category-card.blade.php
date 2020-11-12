{{-- @props(['name',
        'count',
        'background',
        'categoryName',
        'categoryId'
])

<div class="col-9 col-md-2 mx-1 my-3">
    <a href="{{ route('category.announcements',[
            $categoryName,
            $categoryId]) }}" class="d-block w-100 h-100 neumorphism singleCategory bg-{{ $name }}">
      <span class="fa-stack fa-2x border-b">
        {{-- <i class="fas fa-circle fa-stack-2x"></i> --}}
        {{-- <i class="fas fa-building fa-stack-1x text-white"></i>
      </span>
      <p class="mt-3 mb-1 txt-shadow">{{ $name }}</p>
      <p class="text-white font-weight-bold"><span class="font-italic">{{ __('ui.annunci') }}:</span> {{ $count }}</p> 
    </a>
</div> --}}

@props([ 
 'announcement'
])

<div class="card neumorphism">
  <div class="ofs-img-effect">
    @if(Count($announcement->images)>0)
    <img class="card-img-top img-size" src="{{ $announcement->images[0]->getUrl(300,150)}}" alt="Card image cap">
    @else
    <img class="card-img-top img-size" src="{{ asset ('/media/prova.png')}}" alt="Card image cap">
    @endif

  
  </div>
  <div class="card-body">
    <h4 class="card-title mb-0">
      <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}" class="linkReset title-primary">{{  Str::limit($announcement->title, 15, $end='...') }}</a>
    </h4>
    <span class="small text-uppercase">
      <a href="{{ route('category.announcements',[
        $announcement->category->name,
        $announcement->category->id]) }}" class="linkReset font-weight-bold">{{ $announcement->category->name }}</a>
    </span>
    <p class="card-text py-3 pt-4 lead">{{  Str::limit($announcement->body, 25, $end='...') }}</p>
    <div class="d-flex align-items-center justify-content-between">
      <div>
        <div class="small p-1">
          <i class="far fa-calendar-alt"></i> {{ __('ui.published') }} <span class="font-italic">{{ $announcement->created_at->format('d/m/y')  }}</span>
        </div>
        <div class="small p-1">
          <i class="fas fa-user"></i> {{ __('ui.user') }}: <span class="font-italic"> {{ $announcement->user->name  }}</span>
        </div>
      </div>
      <a href="#" class="btn">&euro; {{ $announcement->price }}</a>
    </div>
  </div>
</div>