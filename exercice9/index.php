<?php 
    session_start();
include_once("function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style9.css">
</head>
<body>

<div class="calcul">
    <form action="controller.php" method="POST">
        <label for="" >Entrer un entier positif</label>
        <input type="text" name="num1">

        <?php if(isset($_GET['error']) && (isset($_GET['affiche']) == 1)){?>
             <?php echo"<h4>".$_GET['error']."</h4>"?>
        <?php } ?>   

        <input type="submit" value="calculer" name="submit">
        <?php 
            if(isset($_GET['num'])) {
                nombre( $_GET['num']);
            }       
              
        ?>

    </form>
</div>

<div class="diw">

<button class="btn1"><a href="../exercice8/index.php">precedent</a></button>
<button class="btn2"><a href="../exercice10/index.php">suivant</a></button>

</div>
    
</body>
</html>