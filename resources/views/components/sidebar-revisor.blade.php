@props([
    
    'announcement'
    ])

<div class="col-12 col-md-12 col-lg-4">
    <div class="bg-light1 p-3">
        <div class="border-bottom mb-4">
            <p class="font-italic h3 text-md-center">{{ __('ui.utente') }}</p>
        </div>
        <div class="d-block mx-auto text-center ">
            <div>
                <img src="https://picsum.photos/200" class="img-fluid rounded mb-3 text-center" alt="">
                <h3 class="font-italic title-primary">{{ $announcement->user->name }}</h3>
            </div>
            <div class="text-left mt-4">
                <div class=" p-1">
                    <i class="far fa-envelope font-weight-bold"></i></i><span class="font-weight-bold"> Email:</span> <span class="font-italic"><a class="text-decoration-none txtTitle hover-a" href="mailto:{{$announcement->user->email}}">{{$announcement->user->email}}</a>  </span>
                </div>
                <div class=" p-1">
                  <i class="far fa-calendar-alt font-weight-bold"></i><span class="font-weight-bold"> {{ __('ui.publicato') }}:</span> <span class="font-italic"> {{ $announcement->created_at->format('d/m/y')}} </span>
                </div>
                
                <div class="p-1 mt-2">
                    <i class="fas fa-user-check"></i> <p class="lead d-inline"><span class="font-weight-bold">Affidabilità:</span></p>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                    <i class="fas fa-star star" aria-hidden="true"></i>
                </div>
            </div>
            
        </div>
    </div>
            {{-- <div class="d-block mx-auto">
                        <div class="row pt-5">
                            <div class="col-12 w-100">
                                <form action="{{route('revisor.accept',$announcement->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Accetta annuncio</button>
                                </form>
                              
                            </div>
                            {{-- <div class="col-12 w-100">
                                <form action="{{route('revisor.reject',$announcement->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn badge-warning text-white"><i class="fas fa-undo-alt"></i> Annulla annuncio</button>
                                </form>
                           
                            </div> --}}
                            {{-- <div class="col-12 w-100">
                                <form action="{{route('revisor.reject',$announcement->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Rifiuta annuncio</button>
                                </form>
                           
                            </div>
                        </div> --}}
    
            {{-- </div>  --}}
</div>