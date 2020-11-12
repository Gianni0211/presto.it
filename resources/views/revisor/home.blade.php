<div class="d-md-none" style="margin-top: 120px"></div>

<x-app>

    <x-header title="Forse  il tuo annuncio" />

@if($announcement)
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header"> Annuncio # {{$announcement->id}}
                    <div class="col-6 text-right">
                             
                               
                                    <a class="btn btn-success" href="{{route('revisor.undo')}}">annulla annuncio</a>
                                
                              
                            </div>
                    </div>


                    <div class="card-body">

                        <div class="row">
                            <div class="">
                                <h3 class="">Utente</h3>
                                <div class="">
                                    # {{$announcement->user->id}}
                                    {{$announcement->user->name}}
                                    {{$announcement->user->email}}
                                </div>

                            </div>
                        </div>

                        <div class="row pt-5">
                            <div class="col-6">
                                titolo: {{$announcement->title}}<br>
                            </div>
                          
                        </div>

                        <div class="row pt-5">
                          
                            <div class="col-6">
                                descrizione: {{$announcement->body}}<br>
                            </div>
                        </div>

                        <div class="row pt-5 ">

                  
                                @foreach($announcement->images as $image)
                       
                                    <div class="col-6">
                                      
                                        <img src="{{ $image->getUrl(300,150)}}" alt="Sto elaborando le immagini" class="img-fluid p-5" >
                                       
                                    </div>
                                    <div class="col-6">
                                    <div class="row pt-5 ">
                                    <div class="col-6">
                                        <ul >
                                            <li class="semaforo {{ $image->adult }}" >  Adult :   </li>
                                            <li class="semaforo {{ $image->spoof }}">  Spoof :    </li>
                                            <li class="semaforo {{ $image->medical }}">  Medical : </li>
                                            <li class="semaforo {{ $image->violence }}">  Violence :     </li>
                                            <li class="semaforo {{ $image->racy }}">    Racy :    </li>
                                        </ul>
                            
                                        </div>
                                         <div class="col-6">
                                   
                                    @if ($image->labels)
                                           
                                            @foreach ($image->labels as $label)

                                           
                                                <span class="badge badge-pill badge-warning">{{ $label }}</span>
                                            @endforeach
                                           
                                        @endif
                                        </div >
                                        </div >
                                        </div >
                                  
                                @endforeach

                                
                        </div>



                        <div class="row pt-5">
                            <div class="col-6">
                                <form action="{{route('revisor.reject',$announcement->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                                </form>
                           
                            </div>
                            <div class="col-6 text-right">
                                <form action="{{route('revisor.accept',$announcement->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">accetta</button>
                                </form>
                              
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <h3>
        noncisono annunci 
        <div class="col-6 text-right">
                             
                               
                             <a class="btn btn-success" href="{{route('revisor.undo')}}">annulla annuncio</a>
                         
                       
                     </div>
    </h3>
@endif



</x-app>