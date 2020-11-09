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
                             
                               
                                    <a class="btn btn-success" href="{{route('revisor.undo')}}">annulla annuncio #{{ session()->get('lastAnnouncemetRevsioned')[count(session()->get('lastAnnouncemetRevsioned'))-1]  }}</a>
                                
                              
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
                            <div class="col-4">
                                <img src="https://picsum.photos/200/200">
                            </div>
                            <div class="col-4">
                                <img src="https://picsum.photos/200/200">
                            </div>
                            <div class="col-4">
                                <img src="https://picsum.photos/200/200">
                            </div>
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
                             
                               
                             <a class="btn btn-success" href="{{route('revisor.undo')}}">annulla annuncio #{{ session()->get('lastAnnouncemetRevsioned')[count(session()->get('lastAnnouncemetRevsioned'))-1]  }}</a>
                         
                       
                     </div>
    </h3>
@endif



</x-app>