<h1>ACCUEIL</h1>

<?php
    //si l'utilisateur n'est pas stocké dans la session
    //(traduction : il est pas connecté)
    
    if($front->getSession()->hasUser()){
        echo "Bienvenue ".$session->getUser();   
    }
    //sinon, j'affiche le formulaire
    else include "form.php";
    
?>