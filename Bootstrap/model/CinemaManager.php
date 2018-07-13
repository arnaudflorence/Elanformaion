<?php


require_once ("Manager.php");


class Cinema extends Manager{

    
  function getNbFilm(){
      $db = $this->dbConnect();
      $req = $db->query("SELECT COUNT(ID_FILM) AS nbfilm
                         FROM FILM");
      return $req; 
  }

function getNbGenre(){
      $db = $this->dbConnect();
      $req = $db->query("SELECT COUNT(ID_GENRE) AS nbgenre
                         FROM GENRE");
      return $req; 
  }

function getNbRealisateur(){
      $db = $this->dbConnect();
      $req = $db->query("SELECT COUNT(ID_REALISATEUR) AS nbrealisateur
                            FROM REALISATEUR");
      return $req; 
  }

function getNbActeur(){
      $db = $this->dbConnect();
      $req = $db->query("SELECT COUNT(ID_ACTEUR) AS nbracteur
                            FROM ACTEUR");
      return $req; 
  }
}