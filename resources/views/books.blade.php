<x-skeleton>
    <x-slot:heading>
        Book Listings
    </x-slot:heading>
    <ul class="pl-4" style="list-style-type: none;">
        @foreach ($books as $book)
        <li>
            <a href="/book/{{$book['id']}}" class="text-blue-500">
                <strong>{{ $book['title'] }} : {{ $book->author->author_name }}</strong>
            </a>
        </li>
        @endforeach
    </ul>
</x-skeleton>