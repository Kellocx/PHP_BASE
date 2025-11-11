<?php
session_start();
include 'src/functions.php';
include 'src/Book.php';

// Gestione delle sessioni e dei cookie
if (isset($_POST['addBook'])) {
    addBook($_POST['title'], $_POST['author'], $_POST['year'], $_POST['price'], $_POST['pages']);
}

$books = isset($_SESSION['books']) ? $_SESSION['books'] : [];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Library App</title>
</head>

<body>
    <header>
        <h1>Gestione Libreria</h1>
    </header>

    <main>
        <form method="POST">
            <input type="text" name="title" placeholder="Titolo" required>
            <input type="text" name="author" placeholder="Autore" required>
            <input type="number" name="year" placeholder="Anno" required>
            <input type="number" name="price" placeholder="Prezzo" required>
            <input type="number" name="pages" placeholder="Numero Pagine" required>
            <button type="submit" name="addBook">Aggiungi Libro</button>
        </form>

        <h2>Libri Aggiunti</h2>
        <ul>
            <?php foreach ($books as $book): ?>
                <li><?php echo $book->getDetails(); ?></li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer>
        <p>© 2023 Libreria</p>
    </footer>

    <!-- Modal Bootstrap -->
    <?php include 'modals/modal.php'; ?>
</body>

</html>