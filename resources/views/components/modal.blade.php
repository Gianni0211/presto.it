
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
    
    
    <div class="modal-content">
      <div class="modal-header bg-orange">
        <h5 class="modal-title text-white text-uppercase offset-3 font-italic font-weight-bold"></i>{{ __('ui.chooseCat') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach ($categories as $category)
        <a href="{{ route('category.announcements', [
        $category->name,
        $category->id
        ]) }}" class="nav-link border-{{ $category->name }} my-2 txtTitle text-decoration-none"><span class="badge badge-pill badge-warning d-none d-md-inline title-primary"><i class="fas fa-bell title-primary"></i> {{ $category->announcementCount() }}</span><span class="text-modal"> {{ $category->name }}</span></a>    
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="bg-yellow border-0 text-white p-2" data-dismiss="modal">{{ __('ui.close') }}</button>
      </div>
    </div>
  </div>
</div>