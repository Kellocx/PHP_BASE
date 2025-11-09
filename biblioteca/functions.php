<?php
session_start();

function addBook($book)
{
    if (!isset($_SESSION['books'])) {
        $_SESSION['books'] = [];
    }
    $_SESSION['books'][] = $book;
}

function printBooks()
{
    if (isset($_SESSION['books'])) {
        foreach ($_SESSION['books'] as $book) {
            echo "<li>{$book->title} di {$book->author}, {$book->year}, €{$book->price}, {$book->pages} pagine</li>";
        }
    }
}

function searchBook($title)
{
    if (isset($_SESSION['books'])) {
        foreach ($_SESSION['books'] as $book) {
            if (strcasecmp($book->title, $title) == 0) {
                return $book;
            }
        }
    }
    return null;
}

function deleteBook($title)
{
    if (isset($_SESSION['books'])) {
        foreach ($_SESSION['books'] as $key => $book) {
            if (strcasecmp($book->title, $title) == 0) {
                unset($_SESSION['books'][$key]);
                return true;
            }
        }
    }
    return false;
}
