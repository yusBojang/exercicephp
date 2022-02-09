<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



    $tab=[
        "janv"=>"janvier",
        "fev"=>"fevrier",
        "mar"=>"mars",
        "avr"=>"avril",
        "mai"=>"mais",
        "jui"=>"juin",
        "jul"=>"juillet",
        "out"=>"Aout",
        "sep"=>"Septembre",
        "oct"=>"Octobre",
        "nov"=>"novembre",
        "dec"=>"Decembre",
    ];


    if(isset($_POST['submit'])){
        echo $tab["janv"]." ";
        echo $tab["fev"]." ";
        echo $tab["mar"]." ";
        echo $tab["avr"]." <br>";
        echo $tab["mai"]." ";
        echo $tab["jui"]." ";
        echo $tab["jul"]." ";
        echo $tab["out"]." <br>";
        echo $tab["sep"]." ";
        echo $tab["oct"]." ";
        echo $tab["nov"]." ";
        echo $tab["dec"]." <br>";
    }elseif(isset($_POST['submit1'])){

        $tab["janv"] = "january";

        echo $tab["janv"]." ";
        echo $tab["fev"]." ";
        echo $tab["mar"]." ";
        echo $tab["avr"]." <br>";

    }



