<x-skeleton>
    <x-slot:heading>
        Book Listings
    </x-slot:heading>
    <ul class="pl-4" style="list-style-type: none;">
        @foreach ($books as $book)
            <a href="/book/{{$book['id']}}" class="text-blue-500">
                <li><strong>{{ $book['author'] }}:</strong> {{ $book['author'] }}</li>
            </a>
        @endforeach
    </ul>
</x-skeleton>