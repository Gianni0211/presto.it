<x-app>

    @foreach ($announcements as $announcement)
        <h1>ritorno {{ $announcement->title }}</h1>
    @endforeach

</x-app>