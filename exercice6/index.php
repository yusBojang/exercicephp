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

<div class="calcul">
    <form action="controller.php" method="POST">
        <label for="" >valeur de a</label>
        <input type="text" name="num1">

        <?php if(isset($_GET['error1']) && (isset($_GET['affiche1']) == 1)){?>
             <?php echo "<h4>". $_GET['error1']."</h4>"?>
        <?php } ?>    

        <label for="" >valeur de b</label>
        <input type="text" name="num2">
        <?php if(isset($_GET['error2']) && (isset($_GET['affiche2']) == 1)){?>
             <?php echo "<h4>".$_GET['error2'] ."</h4>"?>
        <?php } ?> 
      
        <label for="" >valeur de c</label>
        <input type="text" name="num3">
        <?php if(isset($_GET['error3']) && (isset($_GET['affiche3']) == 1)){?>
            <span> <?php echo "<h4>".$_GET['error3']  ."</h4>"?></span>
        <?php } ?> 
        <input type="submit" value="calculer" name="submit">

        <?php
         if(isset($_SESSION["resultat"])) {
             echo $_SESSION["resultat"];
         }
        ?>


    </form>

</div>
    
</body>
</html>



<?php
 session_destroy();
?>



