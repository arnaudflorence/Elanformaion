<?php

    function affichArticle($numarticle){
        
        $articles = array(
            "1" => array("titre" => "OUIOUI", "texte" => "Ouioui et ses amis vont à la mer..."),
            "2" => array("titre" => "BOB L'EPONGE", "texte" => "Bob et Patrick vont dans l'eau...")
        );
        
        if(!array_key_exists($numarticle, $articles)){
            return "Article inconnu";
        }
        else{
            $article = "";
            $article.= "<h1>".$articles[$numarticle]["titre"]."</h1>";
            $article.= "<p>".$articles[$numarticle]["texte"]."</p>";
            return $article;
        }
        
    }

    if(isset($_GET['choix'])){
        $choix = $_GET['choix'];
    }
    else $choix = 1;
    
    echo affichArticle($choix);
