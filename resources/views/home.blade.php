<x-app>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>benvenuti in presto home</h1>
            <a href="{{ route('announcement.new') }}" class="btn btn-success rounded-pill ">Nuovo annuncio</a>
        </div>
    </div>
</div>


@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif




</x-app>