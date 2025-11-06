<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio username password</title>
</head>

<body>

    <main>

        <form action="login.php" method="POST">

            Inserisci utente
            <input type="text" id="username" name="username" required placeholder="Inserisci username"><br><br>
            Inserisci password
          
            <input type="password" id="password" name="password" required placeholder="Inserisci password"><br><br>

            <input type="submit" value="Accedi">
        </form>
        <?php 'login.php'; ?>
    </main>

</body>

</html>