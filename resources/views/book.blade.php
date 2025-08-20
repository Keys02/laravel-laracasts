<x-skeleton>
    <x-slot:heading>
        Book Listing
    </x-slot:heading>
    <h1 class="font-bold text-lg pl-3">{{ $book['title'] }}</h1>
    <p class="pl-3">This book was written by {{ $book->author->author_name }}.</p>
</x-skeleton>