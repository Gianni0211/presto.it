<x-app>

<x-header 

title="Crea il tuo annuncio"

/>

  
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <h1>Crea il tuo annuncio</h1> --}}

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
            @endforeach
                </ul>
              </div>
             @endif
              @if (Session::has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif


            <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
               @csrf 
               <input type="hidden"
               name="uniqueSecret"
               value="{{ $uniqueSecret }}"
               >
               
               
               <div class="form-group">
                  <label for="exampleInputEmail1">Nome dell' annuncio</label>
                   <input name="title" value="{{ old('title') }}" type="text" id="title" class="form-control">
              </div>

                <div class="form-group mt-3">
                  <label>Descrizione</label>
                  <textarea name="body" id="body" class="form-control">{{ old('body') }}</textarea>
                </div>
                <div class="form-group mt-3">
                  <label>Inserisci un immagine</label>

                  <input type="file" value="{{ old('img') }}" name="img" >
                  
                </div>
                <div class="form-group mt-3">
                  <label>Inserisci il prezzo</label>

                  <input type="number" value="{{ old('price') }}" name="price" >
                  
                </div>

                <div class="form-group mt-3">
                   <label>Scegli la categoria</label>
                   <select class="form-control" value="{{ old('category_id') }}"  name="category_id" id="category">
                     @foreach ($categories as $category)
                      <option value="{{ $category->id }}"
                       {{ old('category_id') == $category->id ? 'selected' : '' }}
                       >{{ $category->name }}</option>
                     @endforeach
                  </select>
                   
                  @error('category_id')
                   <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                   </span>
                  @enderror
                </div>
                


                <button type="submit" class="my-3 bg-orange text-white">Inserisci annuncio</button>

              </form>
        </div>
    </div>
</div>




</x-app>