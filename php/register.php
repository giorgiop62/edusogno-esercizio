<?php

require_once('./config.php');

$nome = $connessione->real_escape_string($_POST['nome']);
$cognome = $connessione->real_escape_string($_POST['cognome']);
$email =$connessione->real_escape_string ($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);
//CRIPTARE PASSWORD
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `utenti` (`nome`, `cognome`, `email`, `password`)  VALUES ('$nome', '$cognome', '$email',  '$hashed_password');";

if (mysqli_query($connessione, $sql) == false) {
    die(mysqli_error($connessione));
} else {
    echo "Registrazione effettuata con successo";
}

 mysqli_close($connessione);

?>




