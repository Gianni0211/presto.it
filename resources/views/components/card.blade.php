@props([
 'title',
 'body',
 'categoryName',
 'categoryId',
 'createdAt',
 'userName' 
])

{{-- II CARD --}}
  <div class="col-6 col-md-4 p-3">
    <div class="card neumorphism">
      <div class="ofs-img-effect">
        <img class="card-img-top" src="https://picsum.photos/320/201" alt="Card image cap">
      </div>
      <div class="card-body">
        <h4 class="card-title mb-0">
          <a href="{{ route('announcement.single') }}" class="linkReset">{{ $title }}</a>
        </h4>
        <span class="small text-uppercase">
          <a href="{{ route('category.announcements',[
            $categoryName,
            $categoryId]) }}" class="linkReset font-weight-bold">{{ $categoryName }}</a>
        </span>
        <p class="card-text py-3 pt-4 lead">{{ $body }}</p>
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="small p-1">
              <i class="fas fa-map-marker-alt"></i> Città
            </div>
            <div class="small p-1">
              <i class="far fa-calendar-alt"></i> Pubblicato il <span class="font-italic">{{ $createdAt }}</span>
            </div>
            <div class="small p-1">
              <i class="fas fa-user"></i> Utente: <span class="font-italic"> {{ $userName }}</span>
            </div>
          </div>
          <a href="#" class="btn">&euro; 123</a>
        </div>
      </div>
    </div>
  </div>



