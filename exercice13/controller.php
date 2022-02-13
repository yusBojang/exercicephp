<?php
session_start();
include_once("function.php");


if(isset($_POST['submit'])){
    $num1 = $_POST['num1'] ;
    $num1 = trim($num1) ;
    if(preg_match("#^[A-Z]#",$num1) && preg_match("#[\?.\!]$#",$num1)){
        $_SESSION['num'] = $num1;
    }else{
        $_SESSION['num'] = "la phrase est incorrecte";
    }
}
header("location:index.php");

