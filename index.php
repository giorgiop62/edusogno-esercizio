<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>


<body>
    <div class="accedi">
    <h2>Hai già un account?</h2>
        <form action="register.php" method="POST"></form>
        <label for="email">Inserisci l'e-mail</label>
        <input type="text" name="email" id="email" placeholder="name@example.com" required>
        <label for="password">Inserisci la password</label>
        <input type="password" name="password" id="password" placeholder="Scrivila qui" required>

        <input type="submit" value="Accedi">
        <p>Non hai ancora un profilo? <a href="registrazione.php">Registrati</a></p>

    </div>


    
</body>

</html>