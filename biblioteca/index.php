<?php
session_start();
require 'Book.php';
require 'functions.php';

$message = '';
$editIndex = null;
$editBook = null;
$searchResults = [];
$showModal = false;

// Inizializza array libri
if (!isset($_SESSION['books'])) {
    $_SESSION['books'] = [];
}

// Elimina libro
if (isset($_GET['delete'])) {
    deleteBook((int)$_GET['delete']);
    $message = "Libro eliminato.";
}

// Prepara modifica
if (isset($_GET['edit'])) {
    $editIndex = (int) $_GET['edit'];
    if (isset($_SESSION['books'][$editIndex])) {
        $editBook = $_SESSION['books'][$editIndex];
    }
}

// Aggiungi o modifica libro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
    $book = new Book($_POST['title'], $_POST['author'], $_POST['year'], $_POST['price'], $_POST['pages']);
    if ($_POST['editIndex'] !== '') {
        updateBook((int)$_POST['editIndex'], $book);
        $message = "Libro modificato con successo!";
    } else {
        addBook($book);
        $message = "Libro aggiunto con successo!";
    }
}

// Ricerca
if (
    isset($_GET['search']) && trim($_GET['search']) !== '' &&
    isset($_GET['filter']) && in_array($_GET['filter'], ['title', 'author', 'price'])
) {
    $searchResults = searchBooks($_GET['search'], $_GET['filter']);
    $showModal = true;
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Libreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php if (!empty($message)): ?>
        
    <?php endif; ?>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2><?php echo $editBook ? 'Modifica Libro' : 'Aggiungi un Libro'; ?></h2>
        <?php if ($message): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>
        <form method="POST">
            <input type="hidden" name="editIndex" value="<?php echo $editIndex !== null ? $editIndex : ''; ?>">
            <div class="mb-2"><label>Titolo</label><input type="text" name="title" class="form-control" required value="<?php echo $editBook ? $editBook->title : ''; ?>"></div>
            <div class="mb-2"><label>Autore</label><input type="text" name="author" class="form-control" required value="<?php echo $editBook ? $editBook->author : ''; ?>"></div>
            <div class="mb-2"><label>Anno</label><input type="number" name="year" class="form-control" required value="<?php echo $editBook ? $editBook->year : ''; ?>"></div>
            <div class="mb-2"><label>Prezzo</label><input type="number" name="price" class="form-control" required value="<?php echo $editBook ? $editBook->price : ''; ?>"></div>
            <div class="mb-3"><label>Pagine</label><input type="number" name="pages" class="form-control" required value="<?php echo $editBook ? $editBook->pages : ''; ?>"></div>
            <button type="submit" class="btn btn-primary"><?php echo $editBook ? 'Salva Modifiche' : 'Aggiungi Libro'; ?></button>
        </form>

        <hr class="my-5">

        <h4>Cerca Libri</h4>
        <form method="GET" class="mb-3">
            <div class="row g-2">
                <div class="col-md-4">
                    <select name="filter" class="form-select" required>
                        <option value="">Seleziona criterio</option>
                        <option value="title">Titolo</option>
                        <option value="author">Autore</option>
                        <option value="price">Prezzo</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Inserisci valore da cercare" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-secondary w-100" type="submit">Cerca</button>
                </div>
            </div>
        </form>

        <h4>Libri Aggiunti</h4>
        <ul class="list-group">
            <?php printBooks(); ?>
        </ul>
    </div>

    <!-- Modale Bootstrap -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Risultati della ricerca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
                <div class="modal-body">
                    <?php if (!empty($searchResults)): ?>
                        <ul>
                            <?php foreach ($searchResults as $result): ?>
                                <li><?php echo htmlspecialchars($result->title . " di " . $result->author . " - Prezzo: " . $result->price . "€"); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>Nessun risultato trovato.</p>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php if (!empty($message)): ?>
        <script>
            const msgModal = new bootstrap.Modal(document.getElementById('messageModal'));
            msgModal.show();
        </script>
    <?php endif; ?>
    <script>
        // Apri il modale se ci sono risultati di ricerca
        <?php if ($showModal): ?>
            var searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
            searchModal.show();
        <?php endif; ?>
    </script>
</body>

</html>