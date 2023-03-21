<?php

require_once('./config.php');

$nome = $connessione->real_escape_string($_POST['nome']);
$cognome = $connessione->real_escape_string($_POST['cognome']);
$email =$connessione->real_escape_string ($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);
//CRIPTARE PASSWORD
$hased_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (nome,cognome,email,password) VALUES ('$nome','$cognome','$email','$password')";

if($connessione->query($sql) === true){
    echo "Registrazione effettutata con successo";
}else{
    echo "Errore durante la registrazione utente $sql. " .$connessione->error;   
}

?>




