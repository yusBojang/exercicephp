<?php
session_start();

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
    <link rel="stylesheet" href="style11.css">
</head>
<body>

<div class="calcul">
    <form action="controller.php" method="POST">
        <label for="" >Entrer un entier positif</label>
        <input type="text" name="num1">

        <?php if(isset($_GET['error']) && (isset($_GET['affiche']) == 1)){?>
             <?php echo"<h4>". $_GET['error']."</h4>"?>
        <?php } ?>   

        <input type="submit" value="calculer" name="submit">

       
    </form>
    
    </div>

    <div class="calcull">


        <?php
        // var_dump($_SESSION["resultat"]["premier"][1]);
        

         if(isset($_SESSION["resultat"])) {

         echo"<table border=1 width=20%>";
         
          foreach($_SESSION["resultat"]["premier"]  as $i=> $d){
            
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
        }

        if(isset($_SESSION["resultat"])) {

            echo"<table border=1 width=20%>";
             foreach($_SESSION["resultat"]["supperieur"]  as $i=> $d){
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
           }

           if(isset($_SESSION["resultat"])) {

            echo"<table border=1 width=20%>";
             foreach($_SESSION["resultat"]["inferieur"]  as $i=> $d){
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
           }
   


            ?>
       
    </div>

    <div class="diw">

<button class="btn1"><a href="../exercice10/index.php">precedent</a></button>
<button class="btn2"><a href="../exercice12/index.php">suivant</a></button>

</div>




    
</body>
<?php
session_destroy();
?>
</html>




