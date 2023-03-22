<?php

require_once('./config.php');

if ($connessione->connect_error) {
    die("Connessione fallita: " . $connessione->connect_error);
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    // controlla se l'email e la password sono corretti
    $email = $_POST['email'];
    $password = $_POST['password'];

    //controllo database email e password

    $sql_db = "SELECT email, password FROM utenti WHERE email = $email";
    $result = $connessione->query($sql_db);
    if ($result->num_rows > 0) {
        // L'email inserita dall'utente esiste nel database
        $row = $result->fetch_assoc();
        if ($password_inserita == $row["password"]) {
            // La password inserita dall'utente coincide con quella memorizzata nel database
            echo "Login effettuato con successo.";
            session_start();
        } else {
            // La password inserita dall'utente non coincide con quella memorizzata nel database
            echo "La password inserita non è corretta.";
        }
    } else {
        // L'email inserita dall'utente non esiste nel database
        echo "L'email inserita non è presente nel database.";
    }
    
    $connessione->close();
}
    


    
?>