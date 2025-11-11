<?php
require 'Book.php';
require 'functions.php';
include 'header.php';

$message = '';
$searchResults = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
    $book = new Book($_POST['title'], $_POST['author'], $_POST['year'], $_POST['price'], $_POST['pages']);
    addBook($book);
    $message = "Libro aggiunto con successo!";
}

if (isset($_GET['delete'])) {
    deleteBook((int)$_GET['delete']);
    $message = "Libro eliminato.";
}

if (isset($_GET['search']) && isset($_GET['filter'])) {
    $searchResults = searchBooks($_GET['search'], $_GET['filter']);
}
?>

<h2>Aggiungi un Libro</h2>
<?php if ($message): ?>
    <div class="alert alert-info"><?php echo $message; ?></div>
<?php endif; ?>
<form method="POST" class="mb-4">
    <div class="row g-2">
        <div class="col"><input type="text" name="title" class="form-control" placeholder="Titolo" required></div>
        <div class="col"><input type="text" name="author" class="form-control" placeholder="Autore" required></div>
        <div class="col"><input type="number" name="year" class="form-control" placeholder="Anno" required></div>
        <div class="col"><input type="number" name="price" class="form-control" placeholder="Prezzo" required></div>
        <div class="col"><input type="number" name="pages" class="form-control" placeholder="Pagine" required></div>
        <div class="col"><button type="submit" class="btn btn-primary w-100">Aggiungi</button></div>
    </div>
</form>

<h4>Cerca Libri</h4>
<form method="GET" class="mb-3">
    <div class="row g-2">
        <div class="col-md-4">
            <select name="filter" class="form-select" required>
                <option value="">Cerca per...</option>
                <option value="title">Titolo</option>
                <option value="author">Autore</option>
                <option value="price">Prezzo</option>
            </select>
        </div>
        <div class="col-md-6">
            <input type="text" name="search" class="form-control" placeholder="Inserisci valore" required>
        </div>
        <div class="col-md-2">
            <button class="btn btn-secondary w-100" type="submit">Cerca</button>
        </div>
    </div>
</form>

<?php if (!empty($searchResults)): ?>
    <div class="alert alert-success">
        <strong>Risultati:</strong>
        <ul>
            <?php foreach ($searchResults as $book): ?>
                <li><?php echo htmlspecialchars($book->title . " di " . $book->author . " - " . $book->price . "€"); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<h4>Libri Aggiunti</h4>
<ul class="list-group mb-5">
    <?php printBooks(); ?>
</ul>

<?php include 'footer.php'; ?>