<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="calcul">
    <form action="controller.php" method="POST">
        
        <input type="submit" value="francais" name="submit">
        <input type="submit" value="anglais" name="submit1">

    </form>

</div>
    
</body>
</html>