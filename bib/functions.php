<?php
function addBook($title, $author, $year, $price, $pages)
{
    $book = new Book($title, $author, $year, $price, $pages);
    if (!isset($_SESSION['books'])) {
        $_SESSION['books'] = [];
    }
    $_SESSION['books'][] = $book;
}

// Implementa anche le altre funzioni come printBook(), searchBook(), deleteBook() se necessario.