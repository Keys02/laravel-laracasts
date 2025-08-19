<x-skeleton>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <ul style="list-style-type: none;">
        @foreach ($books as $book)
            <li>{{ $book['title'] }} is written by {{ $book['author'] }}</li>
        @endforeach
    </ul>
</x-skeleton>