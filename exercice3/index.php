<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<div class="calcul1">
    <form action="controlle.php" method="POST">
    <input type="submit" value="PERMUTER" name="submit">
    </form>
</div>
<?php

 require "function.php";
if(isset($_SESSION["post"])){
    echo  "<div class='you'> la longueur est  ".$_SESSION["x"]."</div><br>";
    echo  "<div class='you'> la largeur est ".$_SESSION["y"]."</div><br>";
    
    $somm = som($_SESSION["x"],$_SESSION["y"]);
    $diffe = diff($_SESSION["x"],$_SESSION["y"]);
    $produ = prod($_SESSION["x"],$_SESSION["y"]);
    $modu = mod($_SESSION["x"],$_SESSION["y"]);
    $div = div($_SESSION["x"],$_SESSION["y"]);
    $carr = car($_SESSION["x"],$_SESSION["y"]);
    
    echo  "<div class='you'> la somme est ".$somm ."</div><br>";
    echo  "<div class='you'> la difference est ".$diffe ."</div><br>";
    echo  "<div class='you'> le produit est ".$produ ."</div><br>";
    echo  "<div class='you'> la modulo est ".$modu ."</div><br>";
    echo  "<div class='you'> la division est ".$div ."</div><br>";
    echo  "<div class='you'> le carre est ".$carr."</div><br>";
}

?>

<div class="diw">

<button class="btn1"><a href="../exercice2/index.php">precedent</a></button>
<button class="btn2"><a href="../exercice4/index.php">suivant</a></button>

</div>





</body>
</html>