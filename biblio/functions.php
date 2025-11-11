<?php
require_once 'Book.php';

function getBooks()
{
    if (!isset($_COOKIE['books'])) return [];
    $data = json_decode($_COOKIE['books'], true);
    return array_map(fn($b) => Book::fromArray($b), $data);
}

function saveBooks($books)
{
    $json = json_encode(array_map(fn($b) => (array) $b, $books));
    setcookie('books', $json, time() + 3600 * 24 * 30); // 30 giorni
}

function addBook($book)
{
    $books = getBooks();
    $books[] = $book;
    saveBooks($books);
}

function deleteBook($index)
{
    $books = getBooks();
    if (isset($books[$index])) {
        array_splice($books, $index, 1);
        saveBooks($books);
    }
}

function searchBooks($term, $filter)
{
    $results = [];
    $term = strtolower(trim($term));
    foreach (getBooks() as $book) {
        if (
            ($filter === 'title' && str_contains(strtolower($book->title), $term)) ||
            ($filter === 'author' && str_contains(strtolower($book->author), $term)) ||
            ($filter === 'price' && is_numeric($term) && $book->price == $term)
        ) {
            $results[] = $book;
        }
    }
    return $results;
}

function printBooks()
{
    $books = getBooks();
    if (empty($books)) {
        echo "<li class='list-group-item'>Nessun libro aggiunto.</li>";
        return;
    }
    foreach ($books as $i => $book) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo htmlspecialchars($book->title) . " di " . htmlspecialchars($book->author);
        echo " (" . $book->year . ") - " . $book->pages . " pagine - " . $book->price . "€";
        echo "<span><a href='?delete=$i' class='btn btn-sm btn-danger'>Elimina</a></span></li>";
    }
}
?>