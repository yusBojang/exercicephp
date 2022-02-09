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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
     require "function.php";
     require "controller.php";

    // $x1 = rand(1, 20);
    // $y1 = rand(1, 20);
    // $x2 = rand(1, 20);
    // $y2 = rand(1, 20);

     echo  "<div class='you'> les coordonnees du point A sont: ".$x1." et ".$y1."</div><br>";
     echo  "<div class='you'> les coordonnees du point B sont: ".$x2." et ".$y2."</div><br>";

    // $dist = dista($x1,$y1,$x2,$y2);
    // echo  "<div class='you'> la valeur generer est ".$dist."</div><br>";

?>

<div class="calcul1">
    <form action="controller.php" method="POST">
    <input type="submit" value="calculer" name="submit">
    </form>
</div>

<div class="calcul2">
    <?php
    if(isset($_GET['dis'])){
       
       echo  "<div class='you1'> ".dista($x1,$y1,$x2,$y2)."</div><br>";
    }

    ?>

</div>

</body>
</html>