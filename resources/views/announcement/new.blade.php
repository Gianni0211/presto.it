<div class="d-md-none" style="margin-top: 120px"></div>

<x-app>

<x-header  title="{{ __('ui.create') }}" />

<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
            @endforeach
                </ul>s
              </div>
             @endif
              @if (Session::has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif



          {{-- schifo di prova --}}
         




            <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
               @csrf
                 
               <h1>{{ $uniqueSecret }}</h1>

               <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}">

               <div class="form-group">
                  <label for="exampleInputEmail1">{{ __('ui.announcementName') }}</label>
                   <input name="title" value="{{ old('title') }}" type="text" id="title" class="form-control">
              </div>

                <div class="form-group mt-3">
                  <label>{{ __('ui.description') }}</label>
                  <textarea name="body" id="body" class="form-control">{{ old('body') }}</textarea>
                </div>

                <div class="form-group mt-3">
                  <label>{{ __('ui.insertImages') }}</label>
                  <div class="dropzone" id="drophere" class="rounded"></div>

                  {{-- <input type="file" value="{{ old('img') }}" name="img" > --}}

                </div>
                <div class="form-group mt-3">
                  <label>{{ __('ui.insertPrice')}}</label>

                  <input type="number" value="{{ old('price') }}" name="price" class="rounded" >

                </div>

                <div class="form-group mt-3">
                   <label>{{ __('ui.chooseCat') }}</label>
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
                <div class="form-group mt-3">
                <label>{{ __('ui.insertLocation') }}</label>
                <input type="search" id="address" class="form-control" placeholder="Where are we going?" />
                </div>
            


                <button type="submit" class=" mt-5 my-3 bg-yellow text-white py-2 px-3 border-0 rounded">{{ __('ui.insertAnnouncement') }}</button>

              </form>
        </div>
    </div>
</div>




</x-app>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

<script>
(function() {
  var placesAutocomplete = places({
    appId: 'plHF6WXD0XQW',
    apiKey: 'cd0a5a9a9ef8f43580d9435a7868e73e',
    container: document.querySelector('#address')
  });

  var $address = document.querySelector('#address-value')
  placesAutocomplete.on('change', function(e) {
    $address.textContent = e.suggestion.value
  });

  placesAutocomplete.on('clear', function() {
    $address.textContent = 'none';
  });

})();
</script>