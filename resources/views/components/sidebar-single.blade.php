@props([
    
    'announcement'
    ])

<div class="col-12 col-md-12 col-lg-3">
    <div class="mb-5">
        <div class="d-block mx-auto text-center bg-orange text-white py-2">
            <p class="h3">€ {{ $announcement->price }}</p>
        </div>
    </div>
    <div class="bg-light1 p-3">
        <div class="border-bottom mb-4">
            <p class="font-italic h3 text-md-center">{{ __('ui.utente') }}</p>
        </div>
        <div class="d-block mx-auto text-md-center ">
            <div>
                <img src="https://picsum.photos/200" class="img-fluid rounded mb-3" alt="">
                <h3 class="font-italic title-primary">{{ $announcement->user->name }}</h3>
                {{-- <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>   --}}
            </div>
            <div class="text-left mt-4">
                <div class=" p-1">
                  <i class="fas fa-map-marker-alt"></i> Città
                </div>
                <div class=" p-1">
                  <i class="far fa-calendar-alt"></i> {{ __('ui.publicato') }} {{ $announcement->created_at->format('d/m/y') }}
                </div>
                <div class=" p-1">
                    <i class="fas fa-bullhorn"></i> 
                    @foreach ($announcement->user->announcements as $single) {{-- aggiunge il titolo dei post creato dagli utenti --}}
                    <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}" class="d-block">{{ $single->title }}</a>
                        
                    @endforeach
                </div>
                <div class=" p-1 mt-2">
                    <i class="fas fa-star star" aria-hidden="true"></i>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                </div>
            </div>
            
                <div class="bg-yellow py-4 mb-3 mt-3">
                    <i class="fas fa-phone-volume text-white"></i><a href="#" class="text-white rounded text-decoration-none"> +39 3439374638</a>
                </div>
                <div class="btn-border py-4">
                    <i class="fas fa-envelope title-secondary"></i> <a href="#" class="title-secondary rounded text-decoration-none accent"> Contatta inserzionista</a>
                </div>
        </div>
    </div>
    {{-- <div class="row cta-sidebar mt-4 text-center ">

    </div> --}}
</div>