<?php
function addBook($book)
{
    $_SESSION['books'][] = $book;
}

function deleteBook($index)
{
    if (isset($_SESSION['books'][$index])) {
        unset($_SESSION['books'][$index]);
        $_SESSION['books'] = array_values($_SESSION['books']); // Reindicizza l'array
    }
}

function updateBook($index, $book)
{
    if (isset($_SESSION['books'][$index])) {
        $_SESSION['books'][$index] = $book;
    }
}

function printBooks()
{
    foreach ($_SESSION['books'] as $index => $book) {
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
        echo htmlspecialchars($book->title) . " di " . htmlspecialchars($book->author);
        echo '<div>';
        echo '<a href="?edit=' . $index . '" class="btn btn-warning btn-sm">Modifica</a>';
        echo '<a href="?delete=' . $index . '" class="btn btn-danger btn-sm">Elimina</a>';
        echo '</div>';
        echo '</li>';
    }
}

function searchBooks($searchTerm, $filter)
{
    $results = [];
    foreach ($_SESSION['books'] as $book) {
        if (($filter === 'title' && stripos($book->title, $searchTerm) !== false) ||
            ($filter === 'author' && stripos($book->author, $searchTerm) !== false) ||
            ($filter === 'price' && $book->price == $searchTerm)
        ) {
            $results[] = $book;
        }
    }
    return $results;
}
?>