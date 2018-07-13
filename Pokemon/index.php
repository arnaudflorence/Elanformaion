<?php
    require_once("Pokemon.class.php");
    session_start();
    
    if(isset($_GET['reset'])){
        session_destroy();
        session_start();
    }
    if(!isset($_SESSION['resultat'])){
        $_SESSION['resultat'] = "";
    }
    
    
    if(!isset($_SESSION['pokemon'])&&(!isset($_SESSION['pokemon1']))){
        $_SESSION['pokemon'] = new Pokemon("archeops.gif","Roche", "Racaillou", 1000,1000, 98);
        $_SESSION['pokemon1'] = new Pokemon("frizos.gif","eau", "tortank", 1000,1000, 100);
    }
    
    //var_dump($_SESSION['pokemon']);
    //var_dump($_SESSION['pokemon1']);
    
    //echo "Le niveau max des Pokemons est de ".Pokemon::MAX_LEVEL."<br/>";
    

?>




<!DOCTYPE html>

<html>
    <head>
        
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
       
        <title>Pokemon</title>
    </head>
    <body>
 
        <div id="fond"></div>
        <div id="wrapper">
            <div id="jeu">
                <?php
              if ($_SESSION['pokemon1']->getStatut() != "KO") {
               echo  "<div id='adversaire' ><article id='infoBarreAdv'><p>".$_SESSION['pokemon1']->getNom()." :". $_SESSION['pokemon1']->getHP()."/".$_SESSION['pokemon1']->getHPMAX()."</p></article><progress id='barre1' value='".$_SESSION['pokemon1']->getHP()."' max='".$_SESSION['pokemon1']->getHPMAX()."'></progress> <img id='adversaireImg' src='".$_SESSION['pokemon1']->getImg()."'></div>";
                }
              else {
              echo  "<div id='adversaire' ><img id='adversaireImg' src='RIP.gif'></div>";
              }
              
             if ($_SESSION['pokemon']->getStatut() != "KO") {
               echo  "<div id='pokemon'> <img id='pokemonImg' src='".$_SESSION['pokemon']->getImg()."'><article id='infoBarreJ'><p>".$_SESSION['pokemon']->getNom()." : ".$_SESSION['pokemon']->getHP()."/".$_SESSION['pokemon']->getHPMAX()."</p></article><progress id='barre2' value='".$_SESSION['pokemon']->getHP()."' max='".$_SESSION['pokemon']->getHPMAX()."'></progress></div>";
                }
              else {
              echo  "<div id='pokemon' ><img id='pokemonImg' src='RIP.gif'></div>";
              }
              ?>
                
           
            </div>  
            <div id="affichage">
                <?php
                echo $_SESSION['pokemon']."<br>";
                   echo $_SESSION['pokemon1']."<br>";
                ?>
            </div> 

            <div id="instruction">
            
                   <?php     
                        if (($_SESSION['pokemon']->getStatut() != "KO") && ($_SESSION['pokemon1']->getStatut() != "KO")) {
                       echo "<a class='btn' href='controller.php?action=attaquer'>Attaque</a>";
                   } else if ($_SESSION['pokemon']->getStatut() != "KO"){
                      echo '<a class="btn" href="index.php?reset">Victoire</a>';
                   }else if ($_SESSION['pokemon']->getStatut() == "KO"){
                      echo '<a class="btn" href="index.php?reset">Defaite</a>';
                   }
                 
                ?>
                <a class='btn' >Objet</a>
                 <a class='btn' >Defense</a>
                  <a class='btn' href="index.php?reset" >Fuite</a>
            </div> 

        </div>
        <script>
    	$(function(){
            $(".btn").click(function(){
	        $("#pokemon").animate({"left": $(this).offset().left+=100}, 2500);
	        $("#pokemon").animate({"right": $(this).offset().right+=100}, 1000);
            });
        });
        oneKeyPress="if (event.keyCode == 13)mafuncton()";
        
    </script>
    </body>
</html>
