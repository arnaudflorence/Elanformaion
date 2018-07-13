<?php


require_once ("Manager.php");


class Cinema extends Manager{
    //lister tte les voitures
    
  function getListeFilm(){
      $db = $this->dbConnect();
      $req = $db->query("SELECT ID_FILM, titre, YEAR(annee_real) as annee, duree_film, CONCAT(prenom,' ',nom) AS Realisateur
                        FROM FILM f,REALISATEUR r
                        WHERE f.ID_REALISATEUR = r.ID_REALISATEUR
                        ORDER BY `annee` DESC,`titre`");
      
      return $req; 
  }

  
  function getInfoFilm($idfilm){
      $db = $this->dbConnect();
      $req = $db->prepare("SELECT titre,note, YEAR(annee_real) AS annee,duree_film,CONCAT(nom,' ',prenom) AS Realisateur, synopsis, g.GENRE AS genre
                        FROM FILM f,REALISATEUR r,GENRE g, FILM_GENRE fg
                        WHERE f.ID_REALISATEUR = r.ID_REALISATEUR  
                        AND fg.ID_GENRE = g.ID_GENRE
                        AND fg.ID_FILM = f.ID_FILM
                        AND f.id_film = :idfilm
                        ORDER BY `annee` DESC,`titre`");
      $req->execute(array(':idfilm' => $idfilm));
      return $req;
  }
 
  function getInfoFilmCasting($idfilm){
      $db = $this->dbConnect();
      $req = $db->prepare("SELECT CONCAT(nom,' ',prenom) AS Acteur,sexe, role,titre
                        FROM ACTEUR a,FILM_ACTEUR fa,FILM f
                        WHERE a.ID_ACTEUR = fa.ID_ACTEUR
                        AND f.ID_FILM = fa.ID_FILM
                        AND f.id_film=:idfilm");
  
  $req->execute(array(':idfilm' => $idfilm));
      return $req;
  
  }
}