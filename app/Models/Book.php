<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Book
{
    public static function all(): array {
        return [
                [
                    "id" => 1,
                    "title" => "Deep Work",
                    "author" => "Cal Newport"
                ],
                [
                    "id" => 2,
                    "title" => "Meditations",
                    "author" => "Marcus Aurelius"
                ],
                [
                    "id" => 3,
                    "title" => "Limitless",
                    "author" => "Jim Kwik"
                ],
        ];
    }

    public static function find(int $id): array {
        return Arr::first(self::all(), fn($book) => $id == $book['id']);
    }
}