<div class="d-md-none" style="margin-top: 120px"></div>

<x-app>

    <x-header title="Annunci da revisionare" />

@if($announcement)
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-12 col-lg-8">


                <div class="card">
                    <div class="card-header">

                        <h2 class=""><span class="font-weight-bold">Titolo:</span> {{$announcement->title}}</h2>
                    </div>


                    <div class="card-body pw-3">

                            <h3 class="font-weight-bold">Descrizione:</h3>
                            <p class="lead">{{$announcement->body}}</p>   


                        <div class="row pw-3">
                            
                  
                                @foreach($announcement->images as $image)
                       
                                    <div class="col-6">
                                      
                                        <img src="{{ $image->getUrl(300,150)}}" alt="Sto elaborando le immagini" class="img-fluid p-3" >
                                       
                                    </div>
                                    <div class="col-6">
                                    
                                    
                                        <div>
                                            <div>Adult: <span class="progress">
                                                <div class="progress-bar progress-bar-striped {{ $image->adult }}" role="progressbar" style="width: 25%"></div>
                                              </span>
                                            </div>
                                            <div>Spoof: <span class="progress">
                                                <div class="progress-bar progress-bar-striped {{ $image->spoof }}" role="progressbar" style="width: 25%"></div>
                                            </div>
                                            <div>Medical:<span class="progress">
                                                <div class="progress-bar progress-bar-striped {{ $image->medical }}" role="progressbar" style="width: 25%"></div>
                                            </div>
                                            <div>Violence:<span class="progress">
                                                <div class="progress-bar progress-bar-striped {{ $image->violence }}" role="progressbar" style="width: 25%"></div>
                                            </div>
                                            <div>Racy:<span class="progress">
                                                <div class="progress-bar progress-bar-striped {{ $image->racy }}" role="progressbar" style="width: 25%"></div>
                                            </div>
                                        </div>
                            
                                    </div>

                                  <div class="col-12 mt-5">
                                      
                                    @if ($image->labels)
                                           
                                        @foreach ($image->labels as $label) 
                                            <span class="badge badge-pill badge-warning">{{ $label }}</span>
                                        @endforeach
                                   
                                    @endif
                                </div >
                                @endforeach
                        </div>

                                
                    </div>

                    
                </div>
                
                <div class="d-flex justify-content-between mt-5">
                    
                    <form action="{{route('revisor.accept',$announcement->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success txt-shadow"><i class="fas fa-check"></i> Accetta annuncio</button>
                    </form>
                    <form action="{{route('revisor.undo',$announcement->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn bg-orange text-white txt-shadow"><i class="fas fa-undo-alt"></i> Annulla annuncio</button>
                    </form>
                    <form action="{{route('revisor.reject',$announcement->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger txt-shadow"><i class="far fa-trash-alt"></i> Rifiuta annuncio</button>
                    </form>

                </div>

             </div>
            <x-sidebar-revisor
                :announcement="$announcement"
            />
        </div>
    </div>
@else
    
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h3 class="font-italic text-center">Non ci sono annunci da revisionare!</h3>
            <p class="lead text-center mt-4">Complimenti, hai finito di revisionare tutti gli annunci.</p>

            <div class="mt-5 text-center">
                <a href="{{route('home')}}" class="text-decoration-none text-white py-2 px-3 bg-orange btn-hoverh3">Torna alla home</a>
            </div>
        </div>
        <div class="col-12 col-md-3 col-xl-3">
        </div>
    </div>
</div>

@endif


<div style="margin-top:120px;"></div>
</x-app>