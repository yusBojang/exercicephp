

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>



    
<?php
 require "function.php";
 require "controller.php";

 echo  "<div class='you1'> avant permutation, la valeur de a est: ".$a." et la valeur de b est: ".$b."</div><br>";

// require "function.php";

// $x = rand(1, 20);
// $y = rand(1, 20);

// echo  "<div class='you'> la valeur generer est ".$x."</div><br>";
// echo  "<div class='you'> la valeur generer est ".$y."</div><br>";

// perm($x,$y);

?>

<div class="calcul1">
    <form action="controller.php" method="POST">
    <input type="submit" value="PERMUTER" name="submit">
    </form>
</div>

<?php
if(isset($_GET["per1"])){
    echo perm($a,$b);
}

?>

<div class="diw">

<button class="btn1"><a href="../exercice3/index.php">precedent</a></button>
<button class="btn2"><a href="../exercice5/index.php">suivant</a></button>

</div>

</body>
</html>





