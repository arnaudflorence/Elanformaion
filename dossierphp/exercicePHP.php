    <?php //


    echo "Introduction :<br/>";
    echo "<br/>";
    //j'incrémente valeur en euro
    $valeurEnEuro = 15;
    //je convertit ma aleur en fanc
    $valeurFranc = $valeurEnEuro * 6.55957;
    //prendre en compte que 2 décimales 
    $valeurEnFrancFinal = round($valeurFranc, 2);
    //afficher le résultat
    echo "j'ai ".$valeurEnEuro." euro <br/>";
    echo "ce qui fait ".$valeurEnFrancFinal. " franc";
    echo "<br/>";
    echo "<br/>";

    echo "Exercice 1 :<br/>";
    echo "<br/>";
    //j'incrémente ma phrase dans la variable $phrase
    $phrase = "Notre formation DL commence aujourd'hui";
    //j'affiche le nombre de caractères avec strlen 
    echo "La phrase << ".$phrase." >> contient ".strlen($phrase)." caractères ";

    echo "<br/>";
    echo "<br/>";
    
    
    echo "Exercice 2 :<br/>";
    echo "<br/>";
    //j'incrémente ma phrase dans la variable 
    $phrase = "Notre formation DL commence aujourd'hui";
    //j'affiche le nombre de mots avec str_word_count 
    echo "La phrase << ".$phrase." >> contient ".str_word_count($phrase)." mots ";

    echo "<br/>";
    echo "<br/>";
    
    
    echo "Exercice 3 :<br/>";
    echo "<br/>";
    //j'incrémente ma phrase dans la variable 
    $phrase = "Notre formation DL commence aujourd'hui";
    //je remplace le mot "aujourd'hui" par "demain" dans la phrase
    $newphrase = str_replace("aujourd'hui" , "demain" , $phrase);
    //afficher la phrase
    echo "voici la phrase de base : ".$phrase. "</br>";
    echo "voici la phrase modifié : ".$newphrase;
    echo "<br/>";
    echo "<br/>";
    
    
    echo "Exercice 4 :<br/>";
    echo "<br/>";
    //incrémenter la phrase
    $phrase = "Engage le jeu que je le gagne";
    //enlever les espace entre les mots
    $phraseComp = str_replace (' ','',$phrase);
    //Mettre la phrase en minuscule
    $phraseLower = strtolower ($phraseComp);
    //inverser la phrase
    $phraseRevers =  strrev($phraseLower);
    //comparer chaque lettre de la phrase de base avec la phrase inversée
    if ($phraseLower == $phraseRevers){
                    echo "cette phrase *".$phrase."* est un palindrome !";
    }else {
                    echo "cette phrase *".$phrase."* n'est pas un palindrome";
    }
    echo "<br/>";
    echo "<br/>";
    echo "Exercice 5 :<br/>";
    echo "<br/>";
    //j'incrémente une valeur en franc
    $valeurFranc = 100;
    //je convertit ma valeur en euro
    $valeurEuro = $valeurFranc / 6.55957;
    //prendre en compte que 2 décimales 
    $valeurFinal = round($valeurEuro, 2);
    //afficher le résultat
    echo "Montant en francs : ".$valeurFranc." <br/>";
    echo $valeurFranc." francs = ".$valeurFinal. " euro";

    echo "<br/>";
    echo "<br/>";
    echo "Exercice 6 :<br/>";
    echo "<br/>";
    //le prix de l'article
    $article = 9.99;
    //le nombre d'article
    $quantite = 5;
    //la taxe
    $taxe = 0.2;
    //calcule du prix HT
    $prixHT = $article * $quantite;
    //calcule de la taxe
    $taxeCalcule = $prixHT * $taxe;
    //ajout de la taxe au prix HT
    $prixTTC = $prixHT + $taxeCalcule;
    //afficher le résultat 
    echo "Prix unitaire de l'article : ".$article." euro </br>";
    echo "Quantité : ".$quantite."</br>";
    echo "Taux de la TVA : ".$taxe."</br>";
    echo "Le montant de la facture à régler est de ".$prixTTC." euro";

    echo "<br/>";
    echo "<br/>";
    echo "Exercice 7 :<br/>";
    echo "<br/>";
    echo "manière 1 :<br/>";
    //donner un âge à l'enfant
    $enfant = 5;
    //faire les catégories d'âge et voir dans quelle catégorie est l'enfant
    if ($enfant < 8 and $enfant > 5){
                    echo "L'enfant qui a ".$enfant." ans appartient à la catégorie Poussin";}
    else if ($enfant < 10 and $enfant > 7){
                    echo "L'enfant qui a ".$enfant." ans appartient à la catégorie Pupille";}
    else if ($enfant < 12 and $enfant > 9){
                    echo "L'enfant qui a ".$enfant." ans appartient à la catégorie Minime";}
    else if ($enfant == 12 and $enfant > 12){
                    echo "L'enfant qui a ".$enfant." ans appartient à la catégorie Cadet";}
    else {
                    echo "il est hors catégorie";}
    echo "Manière 2 :<br/>";
    //donner un âge à l'enfant
    $enfant = 5;
    //faire les catégories d'âge et voir dans quelle catégorie est l'enfant
    switch ($enfant) {
              case ($enfant == 6 || $enfant == 7):
                $categorie = 'poussin';
                    break;
             case ($enfant == 8 || $enfant == 9):
              $categorie = 'pupille';
                    break;
            case ($enfant == 10 || $enfant == 11):
              $categorie = 'Minime';
                    break;
              case ($enfant >= 12):
                    $categorie = 'Cadet';
                    break; 
                    case ($enfant <= 5):
               $categorie = "cette catégorie n'est pas géré";
                    break; 
                    }
    //affiché la catégorie et l'âge de l'enfant
               echo "l'enfant qui a ".$enfant." ans appartient à la catégorie : ".$categorie;

    echo "<br/>";
    echo "<br/>";
    echo "Exercice 8 :<br/>";
    echo "<br/>";
    echo "Manière 1 :<br/>";

    //j'incrémente ma variable de la table que je veux
    $i = 8;
    {
    //j'affiche le nom de la table
        Echo "Table de ".$i."<br>";
    //je donne le nombra avec le quel multiplier et commencer et rajouter 1 à chaque boucle jusqu'a 10
               for ($j = 1; $j <= 10; $j++)
              {
    //faire le calcule en boucle jusqu'à 10
              echo $i." x ".$j." = ".$i*$j."<br>";
              }
    }
    echo "Manière 2 :<br/>";
    //j'incrémente mes variables que je vais multiplier entre elle
    $i=8;
    $j=1;
    //tant que c'est inférieur ou égale à 10 sa continue
    while($j<=10) {
    //on fait le calcul et on l'affiche
              echo $i." x ".$j." = ".$i*$j."<br>";
    //on donne +1 au J à chaque boucle jusqu'a 10
                $j++;
             }
    echo "<br/>";
    echo "<br/>";
    echo "Exercice 9 :<br/>";
    echo "<br/>";
    //je déclare mes variables pour l'age et le sexe de la personne
    $age = 19; $sexe ="f";
    // je test si les valeurs dans les variable sont juste (true)
    switch(true){ 
    case ($age > 18 && $age<35 && $sexe=="f")||($age>20 && $sexe=="h"): 
    echo "tu es imposable félicitation !"; 
    break; 
    default; 
    echo "Domage tu n'es pas imposable"; 
    break; 
    }


    echo "<br/>";
    echo "<br/>";
    echo "Exercice 10 :<br/>";
    echo "<br/>";
    //faire le calcule de ce qu'on doit rendre en money 
    $facture = 152;
    $paye = 200;
    $reste = $paye - $facture;
    //faire le calcule du nombres de billet et de pièce qu'il faut rendre
    $dix=floor($reste/10);
    $cinq=floor($reste%10/5);
    $deux=floor($reste%10%5/2);
    $un=floor($reste%10%5%2/1);
    //afficher le résultat
    echo "il faut ".$dix." billets de 10, ".$cinq." billet de cinq, ".$deux." pièce de deux, ".$un." pièce de 1";
    echo "<br/>";
    echo "<br/>";
   
    echo "Exercice 11 :<br/>";
    echo "<br/>";
    //incrémenter les valeur dans un tableau
    $marque = array ('Peugeot', 'Renault', 'Audi', 'BMW', 'Mercedes');
    //affiche tte les information du tableau
    Var_dump ($marque) ;
    //dire combien il y a de clé dans le tableau
    echo "Il y a ".count($marque). " marque de voitures dans le tableau<br/>";
    //mettre une balise html pour créer une liste à puce avec le li (<ol type='A'>)
    echo "<ul>";
    //parcourir le tableau de la clé 0 à la clé 4
    for($cle = 0; $cle < 5;$cle++)
    //afficher chaque clé du tableau à la ligne avec une puce
    echo "<li>".$marque[$cle]."<br/>";
    //on ferme la balise liste html
    echo "</ul>";

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    
    echo "Exercice 12 :<br/>";
    echo "<br/>";
    //créer sont tableau avec des clés => élément
    $personne = array (
            "Mickaël"=>"FRA", 
            "Virgile"=>"ESP", 
            "Marie-Claire"=>"ENG",
            "Arnaud"=>"Nul",);
    //on range par ordre alphabétique :
    ksort($personne);
    //on parcour le tableau et on dis : 
    //"pour chaque nom et langue dans le tableau personne
    foreach($personne as $nom => $langue)
    //si la langue est égale à FRA alors dire Salut au nom associé
            if ($langue == "FRA"){
            echo "Salut ".$nom."<br/>";}
            else if ($langue == "ESP"){
            echo "Hola ".$nom."<br/>";}
            else if ($langue == "ENG"){
            echo "Hi ".$nom."<br/>";}
            else {
            echo "mauvaise langue";}

    echo "<br/>";
    echo "<br/>";
   
    echo "Exercice 13 :<br/>";
    echo "<br/>";
    //faire un tableau avec tte les notes :
    $ensNote = array(10,12,8,19,3,16,11,13,9);
            //Faire la moyenne des notes et divisé par l nombre d'entré dans le tableau
    $moyenne = array_sum($ensNote) / count($ensNote);
            //on affiche le résultat arrondi à 2 décimales
    echo "la moyenne générale est donc de : " . round($moyenne, 2);

    echo "<br/>";
    echo "<br/>";
   
    
    echo "Exercice 14 :<br/>";
    echo "<br/>";
            //définir une date de naissance
    $naissance = date_create("27-12-1985");
    //mettre dans une variable la date du jour
    $auj = date("Y-m-d");
    //Faire la différence entre les deux dates
    $age = date_diff($naissance, date_create($auj));
    //afficher l'age, le nombre de mois et de jour et ce qui correspond a **** de jour
    echo 'Age d\'Arnaud : '  . $age->format('%r%y') . ' ans, ' . $age->format('%m') . 
             ' mois et '. $age->format('%d') . ' jours.<br/> Ce qui correspond à ' . $age->format('%a') .
    ' jours.';

    echo "<br/>";
    echo "<br/>";
    echo "Exercice 15 :<br/>";
    echo "<br/>";

    //Introduction aux classes d'objet
    //Créer une classe personne (nom, prenom, date de naissance), instancier 2 personnes et renvoyer leur infos : nom + prénom + age
    $p1 = new Personne("DUPONT","Michel","1980-02-19");
    $p2 = new Personne("VALET","Marion","1985-01-17");
    //Afficher les infos des personnes instanciées
    echo $p1->getNom()." ".$p1->getPrenom()." a ".$p1->calculerAge()." ans<br/>";
    echo $p2->getNom()." ".$p2->getPrenom()." a ".$p2->calculerAge()." ans<br/>";
    $p1->setPrenom("Michèle");
    echo $p1->getNom()." ".$p1->getPrenom()." a ".$p1->calculerAge()." ans<br/>";
    class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;
    public function __construct($nom,$prenom,$dateNaissance){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = $dateNaissance;
    }
    public function getNom(){
    return $this->nom;
    }
    public function setNom($nom){
    echo $this->nom." ".$this->prenom." a changé de nom !<br/>";
    $this->nom=$nom;
    }
    public function getPrenom(){
    return $this->prenom;
    }
    public function setPrenom($prenom){
    echo $this->nom." ".$this->prenom." a changé de prénom !<br/>";
    $this->prenom=$prenom;
    }
    public function getDateNaissance(){
    return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
    echo $this->nom." ".$this->prenom." a changé de date de naissance (???) !<br/>";
    $this->dateNaissance=$dateNaissance;
    }
    public function calculerAge(){
    $date1 = new DateTime($this->getDateNaissance());
    $date2 = new DateTime("now");
    $interval = $date1->diff($date2);
    $age = $interval->format('%y');
    return $age;
    }
    }


