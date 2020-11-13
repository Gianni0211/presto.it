<x-app>
      
    <x-header 
    
    title="i tuoi annunci"
    
    />
    
    <div class="container my-5">
        <div class="row ">

            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4 mt-5">
             <a href="{{ route('announcement.show', compact('announcement')) }}" class="text-center rounded">

               <div class="card albumcard shadow">
                <img class="card-img-top img-size" src="{{ $announcement->images[0]->getUrl(300,150)}}" alt="Card image cap">

                <div class="card-body">

                    <h4 class="card-title mb-0">
                      <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}" class="linkReset">{{  Str::limit($announcement->title, 15, $end='...') }}</a>
                    </h4>

                    <span class="small text-uppercase">
                      <a href="{{ route('category.announcements',[
                        $announcement->category->name,
                        $announcement->category->id]) }}" class="linkReset font-weight-bold">{{ $announcement->category->name }}</a>
                    </span>

                    <p class="card-text py-3 pt-4 lead">{{  Str::limit($announcement->body, 25, $end='...') }}</p>
                    
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <div class="small p-1">
                          <i class="far fa-calendar-alt"></i> {{ __('ui.published') }} <span class="font-italic">{{ $announcement->created_at->format('d/m/y')  }}</span>
                        </div>
                        <div class="small p-1">
                          <i class="fas fa-user"></i> {{ __('ui.user') }}: <span class="font-italic"> {{ $announcement->user->name  }}</span>
                        </div>
                      </div>
                      <a href="#" class="btn">&euro; {{ $announcement->price }}</a>
                    </div>
                  </div>

               </div>
             </a>
            
            </div>

            @endforeach

           
        </div>
    </div>   
        
    
    
</x-app>