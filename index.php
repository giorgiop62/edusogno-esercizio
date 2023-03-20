<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles">
    <title>Edusogno</title>
</head>

<h2>Sei già registrato?</h2>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="slidecontainer">
    <input type="range" name="lunghezzaPass" min="1" max="64" value="0">
  </div>
<input type="submit" name="submit" value="Genera">
</form>
<div><?php echo $password ?></div>

    
</body>

</html>