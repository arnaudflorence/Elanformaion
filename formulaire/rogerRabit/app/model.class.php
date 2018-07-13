<?php

    abstract class Model{
        //paramètre protected = accessible par cette
        //classe et ses enfants
        protected $bdd;
        
        protected function bddConnect(){
            try{
                $this->bdd = new PDO('mysql:host=localhost;dbname=gestion_commande', 
                                     'exefor-home', 
                                     'exefor-home'
                );

            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }