<?php
require_once 'Book.php';

function addBook($book)
{
    $_SESSION['books'][] = (array) $book;
}

function updateBook($index, $book)
{
    if (isset($_SESSION['books'][$index])) {
        $_SESSION['books'][$index] = (array) $book;
    }
}

function deleteBook($index)
{
    if (isset($_SESSION['books'][$index])) {
        unset($_SESSION['books'][$index]);
        $_SESSION['books'] = array_values($_SESSION['books']);
    }
}

function getBooks()
{
    $books = [];
    foreach ($_SESSION['books'] as $data) {
        $books[] = Book::fromArray($data);
    }
    return $books;
}

function searchBooks($term, $filter)
{
    $results = [];
    $term = strtolower(trim($term));
    foreach (getBooks() as $book) {
        if (
            ($filter === 'title' && strpos(strtolower($book->title), $term) !== false) ||
            ($filter === 'author' && strpos(strtolower($book->author), $term) !== false) ||
            ($filter === 'price' && is_numeric($term) && $book->price == $term)
        ) {
            $results[] = $book;
        }
    }
    return $results;
}

function printBooks()
{
    foreach (getBooks() as $i => $book) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo htmlspecialchars($book->title) . " di " . htmlspecialchars($book->author);
        echo " (" . htmlspecialchars($book->year) . ") - " . htmlspecialchars($book->pages) . " pagine - " . htmlspecialchars($book->price) . "€";
        echo "<span>";
        echo "<a href='?edit=$i' class='btn btn-sm btn-warning me-2'>Modifica</a>";
        echo "<a href='?delete=$i' class='btn btn-sm btn-danger'>Elimina</a>";
        echo "</span></li>";
    }
}
?>