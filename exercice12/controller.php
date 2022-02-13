<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



    $tab1= array(
        "janvier",
        "fevrier",
        "mars",
        "avril",
        "mais",
        "juin",
        "juillet",
       "Aout",
       "Septembre",
        "Octobre",
        "novembre",
       "Decembre",
    );

    $tab2=array(
    "january",
    "february",
    "march",
    "avpril",
    "may",
    "june",
    "jully",
    "Aougust",
    "September",
    "October",
    "november",
    "December");
    $_SESSION['resultat'] =  $tab1;

    if(isset($_POST['submit'])){
    $_SESSION['resultat'] =  $tab1;


        header('location:index.php');
        
       
        
    }elseif(isset($_POST['submit1'])){

       
       
            $_SESSION['resultat'] = $tab2;
            header('location:index.php');
        

    }



