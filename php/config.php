<?php

$user = 'root';
$password = 'root';
$db = 'edusogno';
$host = 'localhost';
$port = 3306;

$connessione = mysqli_init();
$success = mysqli_real_connect(
    $connessione,
    $host,
    $user,
    $password,
    $db,
    $port
 );

if($success == false){
    die("Errore durante la connessione: " . mysqli_error_connect());
}

?>