<x-app>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Crea il tuo annuncio</h1>

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
            @endforeach
                </ul>
              </div>
             @endif


            <form method="POST" action="{{ route('announcement.store') }}">
               @csrf 
               
               <div class="form-group">
                  <label for="exampleInputEmail1">Nome dell' annuncio</label>
                   <input name="title" type="text" id="title" class="form-control">
              </div>

                <div class="form-group">
                  <label>Descrizione</label>
                  <textarea name="body" id="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                   <label for="category" class="col-md-4 col-form-label text-md-right">Categoria</label>
                   <select name="category_id" id="category">
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
                


                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>
    </div>
</div>




</x-app>