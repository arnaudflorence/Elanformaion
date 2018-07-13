<?php


echo "<h1>Exercice 1</h1>";

    function convertisseur($phrase){
        $ConvertirMajRouge = mb_strtoupper("<p style='color:red;'>".$phrase."</p>" ); 
        return $ConvertirMajRouge;
    }

    echo convertisseur("mon texte en paramètre");



echo "<h1>Exercice 2</h1>";

    

    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    $pays="Pays";
    $capitale="Capitales";
    function afficherTableHTML($capitales,$pays,$capitale){
        ksort($capitales);
        echo "<table border ='1'>";
        echo  "<tr>
                <th>$pays</th>
                <th>$capitale</th>
                </tr>";
        foreach ($capitales as $pays => $capitale) {    
               echo "<tr><td>"   .$pays.   "</td>";
               echo "<td>" .$capitale.   "</td></tr>";
                } 
         echo "</table>";
    }
    afficherTableHTML($capitales,$pays,$capitale);

echo "<h1>Exercice 3</h1>";

    echo '<a target="_blank" href="http://elan-formation.eu/">site elan</a><br/>';

echo "<h1>Exercice 4</h1>";

        $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
        $pays="Pays";
        $capitale="Capitales";
        $lien ="liens";
        $wiki='<a target="_blank" href="https://fr.wikipedia.org/wiki/Wikipédia:Accueil_principal">wiki</a><br/>';
        function afficherTableHTMLx($capitales,$pays,$capitale,$lien,$wiki){
            asort($capitales);
            echo "<table border ='1'>";
            echo  "<tr>
                        <th>$pays</th>
                        <th>$capitale</th>
                        <th>$lien</th>
                   </tr>";
            foreach ($capitales as $pays => $capitale) {    
                   echo "<tr><td>".$pays."</td>";
                   echo "<td>".$capitale."</td>";
                   echo "<td>".$wiki."</td></tr>";

                    } 
             echo "</table>";
        }
    afficherTableHTMLx($capitales,$pays,$capitale,$lien,$wiki);
    
echo "<h1>Exercice 5</h1>";
  
  $nomsInput = array("nom","prenom","ville");
    
  function afficherInput($nomsInput){
        foreach ($nomsInput as $k => $v) {    
               echo "<p>".$v."</p>";
               echo '<input type="text" name="prenom">';
                } 
  
    }
    afficherInput($nomsInput);
    
echo "<h1>Exercice 6</h1>";
    
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    function alimenterListeDeoulante($elements){
        echo "<select>";
        foreach ($elements as $v) {    
               echo "<option>".$v."</option>";        
                }    
           echo "</select>";   
    }
     alimenterListeDeoulante($elements);
    
    
echo "<h1>Exercice 7</h1>";
    
    $element = array("choix 1"=>"checked","choix 2"=>"","choi 3"=>"");
    function genererCheckbox($element){
      
        foreach ($element as $k=>$v) {    
               echo "<p>".$k.'<input type="checkbox"'.$v.'></p>';       
                }    
           
    }
     genererCheckbox($element);
    
echo "<h1>Exercice 8</h1>";
    $image='<img src="http://my.mobirise.com/data/userpic/76.jpg">';
    $nb="4";
     function repeterImage($image,$nb){
      for($j = 1; $j <= $nb; $j++)
              {
               echo $image;
              }}
      repeterImage($image,$nb);
      
      
      
echo "<h1>Exercice 9</h1>";
    
    $nomsRadio = array("radio 1"=>"checked","radio 2"=>"unchecked","radio 3"=>"unchecked");
    function afficherRadio($nomsRadio){
        foreach ($nomsRadio as $k=>$v) {    
               echo "<p>".$k.'<input name="contact" type="radio"'.$v.'></p>';      
                }            
    }
     afficherRadio($nomsRadio);
     
     
     
echo "<h1>Exercice 10</h1>";
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width">
            <meta charset="utf-8">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
            <title>tamaman</title>
        </head>
        <body>
    <div id="wrapper">
    <div id="fond"></div>
    <h2> formulaire d'inscription à une formation</h2>
    <form class="formulaire">
        <?php
          echo "<h3>choisissez votre formation :</h3>";
          $elements = array("Dveloppeur Logiciel","Designer Web","Intégrateur","Chef de Projet","GOD");
          alimenterListeDeoulante($elements);

          echo "<h3>Vos informations :</h3>";
          $nomsInput = array("nom","prenom","ville","E-mail");
          afficherInput($nomsInput);

          echo "<h3>Choisissez votre sexe :</h3>";
          $nomsRadio=array("Aucun"=>"choix 1",
                            "Homme"=>"choix 1",
                            "Femme"=>"choix 1",
                            "je ne sais pas"=>"choix 1",
                            "autre..."=>"choix 1");
          afficherRadio($nomsRadio);

          echo '<input id="Valider" type="submit" value="Envoyer">';   
        ?>
    </form>
    </div>
     </body>
 
 <?php
 echo "<h1>Exercice 11</h1>";

    $date = "2018-02-23";
    formatDateFr($date);
    function formatDateFr($date){
        setlocale(LC_ALL,"fr", "fr_FR.UTF-8");
        echo strftime("%A %B %D %Y",strtotime($date));       
    }
 
    
    
 echo "<h1>Exercice 12</h1>";
 
    $tableauValeurs=array(true,"text",10,25.369,array("valeur1","valeur2"));
    foreach ($tableauValeurs as $value) {
        var_dump($value);
    }

 var_dump($tableauValeurs);
 
  echo "<h1>Exercice 15</h1>";
  
  $input="arnaud@gogole.com";
  function validationEmail($email){
      $filtre=FILTER_VALIDATE_EMAIL;
      if (filter_var($email,$filtre))
              echo "l'adresse ".$email." est une adresse valide";
      else
            echo "l'adresse ".$email." n'est pas une adresse valide";     
  }
      
 validationEmail($input);
 
 ?>
