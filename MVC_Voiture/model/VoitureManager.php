<?php



require_once ("Manager.php");


class VoitureManager extends Manager{
    //lister tte les voitures
    function getVoitures(){
        $db = $this->dbConnect();
        $req = $db->query("");
        return $req;  
    }
  function getPlaqueImmat(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT plaque_immat FROM VOITURE");
        return $req; 
  }
  function getVoitureMotori(){
      $db = $this->dbConnect();
      $req = $db->query("SELECT plaque_immat, nom_marque, nom_modele, libelle_categorie, nb_portes, libelle_motorisation
                        FROM CATEGORIE c,MARQUE ma, MODELE mo, MOTORISATION mot, VOITURE v
                        WHERE v.id_motorisation = mot.id_motorisation
                        AND v.id_modele = mo.id_modele
                        AND ma.id_marque = mo.id_marque
                        AND v.id_categorie = c.id_categorie  
                        ORDER BY `ma`.`nom_marque` ASC");
      return $req; 
  }
}
