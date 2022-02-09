<?php

    include_once("function.php");

    $error = "";
    $affiche = 0;



    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'] ;
        if(saisiEntier($num1)  ){
            header("location:index.php?num=".$num1);
        }else{
            if(!saisiEntier($num1)){
                $error = "veuillez saisir un entier";
                $affiche = 1;
            }

            header("location:index.php?error= $error&affiche=$affiche");
           
        }
       
    }




