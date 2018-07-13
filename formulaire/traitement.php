<?php
function isObligatoire($c, $v, $sbl){
      if(strpos(trim($c), $sbl) !== false) {
          if ($v !==''){
              return str_replace($sbl, '', $c);
          }
      }
        return false;
    }
function isVide($valeur, $type="text"){
    $check = array(
    "email" => array(FILTER_VALIDATE_EMAIL, "", "l'adresse mail n'est pas valide"),
    "pass" => array(FILTER_VALIDATE_REGEXP,
        array("options" =>
            array("regexp" => "/[a-z0-9]{6,}/")), "c'est pas le bon format pour le prenom")
    ,
    "nom" => array(FILTER_VALIDATE_REGEXP,
        array("options" =>
            array("regexp" => "/[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð'-]{3,}/")
        ), "c'est pas le bon format pour le nom")
    ,
    "prenom" => array(FILTER_VALIDATE_REGEXP,
        array("options" =>
            array("regexp" => "/[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð'-]{3,}/")
        ), "le mot de passe n'est valide")
    ,
    "pass-repeat" => array(FILTER_VALIDATE_REGEXP,
        array("options" =>
            array("regexp" => "/" . $_POST["*pass"] . "/"))
        , "le mot de passe n'est pas le même")
       
    );
        if(isset($check[$champ]) && !filter_var($valeur, $check[$champ][0], $check[$champ][1])) {
                $_SESSION['errors'] .= $check[$champ][2] . " </br>";
            }
    }

function isValide($valeur){
    
}
const SYMBOL ="*";

//on démarre la session
session_start();
//on initialise le message d'erreur à vide
$_SESSION['errors'] = "";
//si le tableau POST n'est pas entièrement vide (ce qui veut dire qu'on
//a essyé d'atteindre cette page sans passer par le formulaire)
if (!empty($_POST)) {
    //on boucle sur POST en récupérant, à chaque boucle, le nom du champ et sa valeur
    foreach ($_POST as $champ => $valeur) { 
        $valeur = trim(htmlentities($valeur));
        //si il y a une étoile dans le nom du champ //et si la valeur associée à ce champ est vide
        if (isObligatoire($champ, $valeur, SYMBOL)) {
                if (isset($check[$champ]) && 
                   !filter_var($valeur, $check[$champ][0], $check[$champ][1])) {
                    $_SESSION['errors'] .= $check[$champ][2] . " </br>";
                }
            }
        
    }
} else
// on ajoute un message d'erreur indiquant que le visiteur n'a pas le droit de passer
//ici sans alider le formulaire
    $_SESSION['errors'] .= "tricheur, tu n'as pas validé le formulaire";
//s'il y a un message d'erreur en session 
if (!empty($_SESSION['errors'])) {
    //on renvois le visiteur vers le formulaire
    header("Location:formulaire.php");
}
echo 'tout va bien';


