<x-app>

<x-header 

title="Unisciti al nostro team"

/>

  
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
     <br>
            Perchè Vuoi diventare revisore ? <hr>
            <form method="POST" action="{{ route('revisor.senMessageTobeReviso') }}" enctype="multipart/form-data">
               @csrf 

            <textarea name="message" id="body" rows="10" cols="50" class="form-control">{{ old('body') }}</textarea>

            <button type="submit" class="my-3 nav-link bg-yellow text-white rounded btn-hover text-center">invia la tua richiesta</button>

              </form>
        </div>
    </div>
</div>




</x-app>