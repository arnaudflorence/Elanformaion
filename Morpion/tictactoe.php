<?php


session_start();

if(!isset($_SESSION['symbole'])){
    unset($_SESSION['symbole']);
    $_SESSION['symbole'] = array("","","","","","","","","");
}

if(isset($_GET['restartGame'])){
    unset($_SESSION['symbole']);
    $_SESSION['symbole'] = array("","","","","","","","","");
}
if(isset($_GET['restartScore'])){
    unset($_SESSION['scoreJoueur1']);
    unset($_SESSION['scoreJoueur2']);
}
if (!isset($_SESSION['joueur'])){
    $_SESSION['joueur']=rand(1,2);
}

if (isset($_GET['btn'])&& $_SESSION['symbole'][$_GET['btn']] == ""){
    if ($_SESSION['joueur']==1){
        $_SESSION['symbole'][$_GET['btn']]="X"; 
        $_SESSION['joueur'] = 2;
    }
    else{
        $_SESSION['symbole'][$_GET['btn']] = "O";  
        $_SESSION['joueur']=1;
    }
}


$verif = array ("0-1-2","3-4-5","6-7-8",
                "0-3-6","1-4-7","2-5-8",
                "0-4-8","2-4-6");

function verificationVicoire($verif){
foreach ($verif as $value) {
    $result = explode('-', $value);
    $str = $_SESSION['symbole'][$result[0]].$_SESSION['symbole'][$result[1]].$_SESSION['symbole'][$result[2]];
    if ($str =='XXX'){  
    $_SESSION['symbole'] = array("<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>");
    score();
    return "<p class='messageVictoire'>Yes, le joueur 1 à gagné !!</p>"; 
    }
    elseif ($str =='OOO') {
    $_SESSION['symbole'] = array("<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>");
    score();
    return "<p class='messageVictoire'>Yes, le joueur 2 à gagné !!</p>";
    }
}}  

function verifEgal(){
if (!empty($_SESSION['symbole'][0])&&
          ($_SESSION['symbole'][1])&&
          ($_SESSION['symbole'][2])&&
          ($_SESSION['symbole'][3])&&
          ($_SESSION['symbole'][4])&&
          ($_SESSION['symbole'][5])&&
          ($_SESSION['symbole'][6])&&
          ($_SESSION['symbole'][7])&&
          ($_SESSION['symbole'][8]) && 
        $_SESSION['symbole'] != array("<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>","<img class='victoire' src='tresors.png'/>")
        ){
    $_SESSION['symbole'] = array("<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>","<img class='defaite' src='null.png'/>");
    return "<p class='messageVictoire'>vous etes égalité !</p>";
 }
}
if (!isset($_SESSION['scoreJoueur1'])){
    $_SESSION['scoreJoueur1']=0;
}
if (!isset($_SESSION['scoreJoueur2'])){
    $_SESSION['scoreJoueur2']=0;
}
function score(){
    if ($_SESSION['joueur']==1){
        $_SESSION['scoreJoueur1']++;
    }
    else{
        $_SESSION['scoreJoueur2']++;
}}

?>

<!DOCTYPE html>

<html>
    <head>
        
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Freckle+Face" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    

        <title></title>
    </head>
    <body>
 
        <div id="fond"></div>
       <div id="menuTop"> 
           <h1>Tic Tac Toe</h1>
      
            <?php
            echo '<p>score du joueur 1 qui a le symbole X : '.$_SESSION["scoreJoueur2"].'</p>';
            echo '<p>score du joueur 2 qui a le symbole O : '.$_SESSION["scoreJoueur1"].'</p>';
            echo "<p class='turn'>c'est au tour du joueur : ".$_SESSION['joueur']."</p>";
            echo verificationVicoire($verif);
            echo verifEgal();
            ?>
       </div> 
  <div id="content">
    <div id="ligne">   
        <a href="tictactoe.php?btn=0" class="<?php if ($_SESSION['symbole'][0]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][0]; ?></a>      
        <a href="tictactoe.php?btn=1"class="<?php if ($_SESSION['symbole'][1]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][1]; ?></a>        
        <a href="tictactoe.php?btn=2"class="<?php if ($_SESSION['symbole'][2]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][2]; ?></a>
    </div> 
     
    <div id="ligne">  
        <a href="tictactoe.php?btn=3"class="<?php if ($_SESSION['symbole'][3]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][3]; ?></a>       
        <a href="tictactoe.php?btn=4"class="<?php if ($_SESSION['symbole'][4]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][4]; ?></a>        
        <a href="tictactoe.php?btn=5"class="<?php if ($_SESSION['symbole'][5]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][5]; ?></a>
    </div> 
     
    <div id="ligne">  
        <a href="tictactoe.php?btn=6"class="<?php if ($_SESSION['symbole'][6]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][6]; ?></a>       
        <a href="tictactoe.php?btn=7"class="<?php if ($_SESSION['symbole'][7]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][7]; ?></a>        
        <a href="tictactoe.php?btn=8"class="<?php if ($_SESSION['symbole'][8]){echo "used";} else {echo "unused";}?>"><?php echo $_SESSION['symbole'][8]; ?></a>
    </div>  
    <div id="menu">
            <a class="clear" href="tictactoe.php?restartGame"><strong>GAME</strong></a>
            <a class="clear" href="tictactoe.php?restartScore"><strong>SCORE</strong></a>
    </div>     
 </div>  
    <script>
        $(document).ready(function(){
            $("a:not(.clear)").each(function(i,e){
                if($(this).text() != ""){
                    $(this).removeAttr("href");
                }
            });
        });
    </script>
    </body>
</html>
