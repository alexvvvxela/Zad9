<?php

namespace Alexv\Zad9;

class Book
{
    private $title;
    private $author;
    private $publishedYear;
    private $genre;

    public function __construct($title, $author, $publishedYear, $genre)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publishedYear = $publishedYear;
        $this->genre = $genre;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    public function getBookInfo(): string
    {
        return "Название: {$this->title}, Автор: {$this->author}, Год публикации: {$this->publishedYear}, Жанр: {$this->genre}";
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function getPublishedYear(): int
    {
        return $this->publishedYear;
    }

    public function setPublishedYear($publishedYear): void
    {
        $this->publishedYear = $publishedYear;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
}
