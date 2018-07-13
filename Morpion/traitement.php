<?php

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
    $_SESSION['symbole'] = array("Win","Win","Win","Win","Win","Win","Win","Win","Win");
    score();
    return '<p>Yes, le joueur 1 à gagné !!</p>'; 
    }
    elseif ($str =='OOO') {
    $_SESSION['symbole'] = array("Win","Win","Win","Win","Win","Win","Win","Win","Win");
    score();
    return '<p>Yes, le joueur 2 à gagné !!</p>';
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
        $_SESSION['symbole'] != array("Win","Win","Win","Win","Win","Win","Win","Win","Win")
        ){
    $_SESSION['symbole'] = array("null","null","null","null","null","null","null","null","null");
    return "vous etes égalité !";
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



header("Location:tictactoe.php");

?>