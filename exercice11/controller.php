<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $tab=[
        "premier"=>[],
        "supperieur"=>[],
        "inferieur"=>[]

    ];

    include_once("function.php");

    $error = "";
    $affiche = 0;

    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'] ;

        if(saisiEntier($num1)){
            $moy = 1;
            $som = 1;
            echo "les nombre premier comprisent entre 1 et N";
            for($i=1;$i<=$num1;$i++){
                if(nbrPremier($i)){
                  echo $tab["premier"][]=$i."<br>"; 
                  $som = $som+$i;
                }
            }
            $moy=$som/$num1;
            echo "la moyenne est".$moy."<br>";

            echo "les nombre premier inferieur a la moyenne";

            for($i=1;$i<=$num1;$i++){
                if($moy>$i){
                    echo $tab["inferieur"][]=$i."<br>"; 
                }
                
            }

            echo "les nombre premier supperieur a la moyenne";

            for($i=1;$i<=$num1;$i++){
                if($moy<$i){
                    echo $tab["supperieur"][]=$i."<br>"; 
                }
                
            }

            
        }else{
            if(!saisiEntier($num1)){
                $error = "veuillez saisir un entier";
                $affiche = 1;
            }

            header("location:index.php?error= $error&affiche=$affiche");
           
        }
       
    }

