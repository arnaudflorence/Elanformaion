<?php
    require_once("model/Pokemon.class.php");
    
    session_start();

if(($_SESSION['pokemon']->getStatut()!="KO")) { 
     $_SESSION['pokemon']->attaquer($_SESSION['pokemon1']);
} 


if(($_SESSION['pokemon1']->getStatut()!="KO")) {
    //sleep(1);
    $_SESSION['pokemon1']->attaquer($_SESSION['pokemon']);
} 


header("Location:index.php");
