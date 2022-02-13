<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// require_once('controller.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>

<div class="calcul">
    <form action="controller.php" method="POST">
        
        <input type="submit" value="francais" name="submit">
        <input type="submit" value="anglais" name="submit1">

    </form>

</div>

    <?php
if(isset($_SESSION['resultat'])){
    

}

echo"<table border=1 width=80%>";
foreach($_SESSION['resultat']  as $i=> $d){
    if($i%3==0)
    {
        echo"<tr>";
    }
    echo "<td>".$d."</td>";
    if(($i+1)%3==0){
        echo"</tr>";   
    }
}
echo"</table><br>";

    ?>    

<div class="diw">

<button class="btn1"><a href="../exercice11/index.php">precedent</a></button>
<button class="btn2"><a href="../exercice13/index.php">suivant</a></button>

</div>
</body>

</html>