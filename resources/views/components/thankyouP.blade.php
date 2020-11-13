<x-app>

    <x-header 
    
    title="Grazie per aver inserito il tuo annuncio!"
    
    />
         
            <div class="container mt-5 py-t">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    <h2>{{$message}}</h2>
                    </div>
                </div>
            </div>



            <div class="my-5 text-center">
                <a href="{{route('home')}}" class="text-decoration-none text-white py-2 px-3 bg-orange btn-hoverh3">Torna alla home</a>
            </div>
         

    </x-app>