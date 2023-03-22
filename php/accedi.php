<?php
require_once('./config.php');

$email =$connessione->real_escape_string ($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);

if($_SERVER["REQUEST_METHOD"] === "POST" ){

    $sql_select = "SELECT * FROM utenti WHERE email = 'email'";
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['id'] = $row['id'];
                $_SESSION['loggato'] = true;

                header("location: ./area_privata.php ");
            }
        }

    }

    $connessione->close();
}