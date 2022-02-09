<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

require "function.php";

$x = rand(1, 20);

echo  "<div class='you'> la valeur generer est ".$x."</div><br>";

$perimetre = peri($x);
$surfa = surface($x);

echo "<div class='you'> le perimetre est ".$perimetre."</div> <br>";
echo "<div class='you'> la surface est ".$surfa."</div> <br>";


?>

</body>
</html>





