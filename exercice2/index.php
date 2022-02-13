

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
<?php
require "function.php";

$x = rand(1, 20);
$y = rand(1, 20);

echo  "<div class='you'> la longeur est ".$x."</div><br>";
echo  "<div class='you'> la largeur est ".$y."</div><br>";

$perimetre = peri($x,$y);
$surfa = surface($x,$y);

echo  "<div class='you'> le perimetre est ".$perimetre."</div><br>";
echo  "<div class='you'> la surface est ". $surfa."</div><br>";



?>
<div class="diw">

<button class="btn1"><a href="../exercice1/index.php">precedent</a></button>
<button class="btn2"><a href="../exercice3/index.php">suivant</a></button>

</div>


</body>
</html>