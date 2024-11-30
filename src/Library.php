<?php

namespace Alexv\Zad9;

use Alexv\Zad9\Book;

class Library
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBookBByTitle(string $title): bool
    {
        for ($index = 0; $index < count($this->books); $index++) {
            if ($this->books[$index]->getTitle() === $title) {
                unset($this->books[$index]);
                $this->books = array_values($this->books);
                return true;
            }
        }
        return false;
    }

    public function findBooksByAuthor2(string $author): array
    {
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getAuthor() === $author) {
                $foundBooks[] = $book;
            }
        }
        return $foundBooks;
    }

    public function listAllBooks(): array
    {
        return $this->books;
    }
}


