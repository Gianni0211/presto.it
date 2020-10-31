<x-app>

<h1>welcome </h1>

@foreach ($announcements  as $announcement)
{{ $announcement->body }}
{{ $announcement->title }}

    
@endforeach

</x-app>