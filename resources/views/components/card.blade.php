@props([
 'title',
 'body',
 'categoryName',
 'categoryId',
 'createdAt',
 'userName' 
])

{{-- II CARD --}}
  <div class="col-6 col-md-4 my-3 p-3">
    <div class="card neumorphism">
      <div class="ofs-img-effect">
        <img class="card-img-top" src="https://picsum.photos/320/201" alt="Card image cap">
      </div>
      <div class="card-body">
        <h4 class="card-title mb-0">
          <a href="#" class="linkReset">{{ $title }}</a>
        </h4>
        <span class="small text-uppercase">
          <a href="{{ route('category.announcements',[
            $categoryName,
            $categoryId]) }}" class="linkReset">{{ $categoryName }}</a>
        </span>
        <p class="card-text py-3 pt-4">{{ $body }}</p>
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="small p-1">
              <i class="fas fa-map-marker-alt"></i> Città
            </div>
            <div class="small p-1">
              <i class="far fa-calendar-alt"></i>{{ $createdAt }}
            </div>
          </div>
          <a href="#" class="btn">&euro; 123</a>
        </div>
        <p class="lead mb-0">
          {{ $userName }}
      </p>
      </div>
    </div>
  </div>


{{-- I CARD --}}
 {{-- <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body">
                    <p>
                        <img src="https://picsum.photos/200/200" class="rounded float-right img-fluid" alt="">
                        {{ $body }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Category: <a href="{{ route('category.announcements',[
                        $categoryName,
                        $categoryId]) }}">
                        {{  $categoryName }}</a></strong>
                    <i>{{ $createdAt}} - {{ $userName }}</i>
                </div>
            </div>
</div> --}}


