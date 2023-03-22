<?php
    session_start();
    if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !==true){
        header("location:accedi.html");
        exit;

    }

?>
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
        <a href="logout.php">Discontetti</a>
    </header>

    <?php
    echo "ciao" .$_SESSION["nome"];
    ?>



</body>
    
    