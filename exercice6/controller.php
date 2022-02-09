<?php
session_start();
 include_once("function.php");
 $tabErreur = [];
 $error1 = "";
 $error2 = "";
 $error3 = "";
 $affiche1 = 0;
 $affiche2 = 0;
 $affiche3 = 0;

    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'] ;
        $num2 = $_POST['num2'] ;
        $num3 = $_POST['num3'] ;

        
            
            if(saisiEntier($num1) && saisiEntier($num2) && saisiEntier($num3)) {
                $_SESSION["resultat"] = equation($num1, $num2, $num3);
                header("location:index.php");
            }else{

                if(!saisiEntier($num1)) {
                $error1 = "entrer un entier <br>"; 
                $affiche1 =1;
                }
                
                if(!saisiEntier($num2)) {
                    $error2 = "entrer un entier"; 
                    $affiche2 =1;

                }
                if  (!saisiEntier($num3)){
                    $error3 = "entrer un entier"; 
                    $affiche3 =1;
                }    
                header("location:index.php?error1=$error1&affiche1=$affiche1&error2=$error2&affiche2=$affiche2&error3=$error3&affiche3=$affiche3");        
            }
    }

    





