<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'header.php';
    require 'book.php';
    require 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $book = new Book($_POST['title'], $_POST['author'], $_POST['year'], $_POST['price'], $_POST['pages']);
        addBook($book);
    }
    ?>

    <div class="container mt-5">
        <h2>Aggiungi un Libro</h2>
        <form method="POST">
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Autore</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="year">Anno</label>
                <input type="date" class="form-control" id="year" name="year" required>
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="pages">Numero Pagine</label>
                <input type="number" class="form-control" id="pages" name="pages" required>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi Libro</button>
        </form>

        <h2 class="mt-5">Libri Aggiunti</h2>
        <ul>
            <?php printBooks(); ?>
        </ul>
    </div>

    <?php require 'footer.php'; ?>
</body>

</html>