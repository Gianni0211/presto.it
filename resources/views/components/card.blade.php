@props([
 
 'announcement'
])



{{-- II CARD --}}
  <div class="col-6 col-md-4 p-3">
    <div class="card neumorphism">
      <div class="ofs-img-effect">
        <img class="card-img-top img-size" src="{{ Storage::url($announcement->images[0]->file)}}" alt="Card image cap">
      </div>
      <div class="card-body">
        <h4 class="card-title mb-0">
          <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}" class="linkReset">{{ $announcement->title }}</a>
        </h4>
        <span class="small text-uppercase">
          <a href="{{ route('category.announcements',[
            $announcement->category->name,
            $announcement->category->id]) }}" class="linkReset font-weight-bold">{{ $announcement->category->name }}</a>
        </span>
        <p class="card-text py-3 pt-4 lead">{{ Str::limit($announcement->body, 50, $end='...')  }}</p>
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="small p-1">
              <i class="fas fa-map-marker-alt"></i> Città
            </div>
            <div class="small p-1">
              <i class="far fa-calendar-alt"></i> Pubblicato il <span class="font-italic">{{ $announcement->created_at->format('d/m/y')  }}</span>
            </div>
            <div class="small p-1">
              <i class="fas fa-user"></i> Utente: <span class="font-italic"> {{ $announcement->user->name  }}</span>
            </div>
          </div>
          <a href="#" class="btn">&euro; {{ $announcement->price }}</a>
        </div>
      </div>
    </div>
  </div>


