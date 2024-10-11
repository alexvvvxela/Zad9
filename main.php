<?php

require_once "vendor/autoload.php";

use Alexv\Zad9\Library;
use Alexv\Zad9\Book;

$library = new Library();
$book1 = new Book("Война и мир", "Лев Толстой", 1869, "Роман");
$book2 = new Book("1984", "Джордж Оруэлл", 1949, "Научная фантастика");
$book3 = new Book("Мастер и Маргарита", "Михаил Булгаков", 1967, "Роман");
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$library->removeBookBByTitle("1984");
$booksByTolstoy = $library->findBooksByAuthor2("Лев Толстой");
$allBooks = $library->listAllBooks();

echo "Все книги в библиотеке:\n";
for ($i = 0; $i < count($allBooks); $i++) {
    echo $allBooks[$i]->getBookInfo() . "\n";
}

echo "\nКниги автора 'Лев Толстой':\n";
for ($i = 0; $i < count($booksByTolstoy); $i++) {
    echo $booksByTolstoy[$i]->getBookInfo() . "\n";
}
