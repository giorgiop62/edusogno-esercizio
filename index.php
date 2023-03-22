
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Registrazione</title>
</head>


<body>
    <header>
        <div class="logo">
            EDUSOGNO
        </div>
    </header>

    <h2>Crea il tuo account</h2>
    <main>

       
        <div class="accedi">
            <form action="./php/register.php" method="POST">    
                <label for="nome">Inserisci il  nome</label>
                <input type="text" name="nome" id="nome" placeholder="Mario" required>
                <label for="cognome">Inserisci il cognome</label>
                <input type="text" name="cognome" id="cognome" placeholder="rossi" required>
                <label for="email">Inserisci l'e-mail</label>
                <input type="text" name="email" id="email" placeholder="name@example.com" required>
                <label for="password">Inserisci la password</label>
                <input type="password" name="password" id="password" placeholder="Scrivila qui" required>
                <input class="button" type="submit" value="Registrati">
            </form>
            <p>Hai già un account? <a href="accedi.html">Accedi</a></p>
        </div>
</main>




    
</body>

</html>