<?php

namespace Alexv\Zad9;

use Alexv\Zad9\Book;

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBookBByTitle($title) {
        for ($index = 0; $index < count($this->books); $index++) {
            if ($this->books[$index]->getTitle() === $title) {
                unset($this->books[$index]);
                $this->books = array_values($this->books);
                return true;
            }
        }
        return false;
    }

    public function findBooksByAuthor2($author) {
        $foundBooks = [];
        for ($i = 0; $i < count($this->books); $i++) {
            if ($this->books[$i]->getAuthor() === $author) {
                $foundBooks[] = $this->books[$i];
            }
        }
        return $foundBooks;
    }

    public function listAllBooks() {
        return $this->books;
    }
}
?>