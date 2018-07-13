<?php

    require "app/model.class.php";

    class UserModel extends Model{
              
        //méthode constructeur = fonction qui est appelée
        //lorsque on écrit "new UserModel();"
        //lorsqu'on créé une instance (objet) de la classe UserModel
        public function __construct(){
            //surcharge la méthode bddConnect de son parent
            parent::bddConnect();
        }
        
        public function createUser($pseudo, $mdp){
            $sql = "INSERT INTO user (pseudo_user, mdp_user)
                    VALUES('$pseudo', '$mdp')";
            return $this->bdd->query($sql);
        }
        
        public function checkUser($pseudo){
            $sql = "SELECT pseudo_user
                    FROM user 
                    WHERE pseudo_user = ?";
            $stmt = $this->bdd->prepare($sql);
            $stmt->execute(array($pseudo));
            
            if($stmt->fetch(PDO::FETCH_ASSOC)){
                return true;
            }
            else return false;
        }
        
        public function selectUser($nom, $pass){
            $sql = "SELECT pseudo_user, mdp_user
                    FROM user 
                    WHERE pseudo_user = ? 
                    AND mdp_user = ?";
            $stmt = $this->bdd->prepare($sql);
            $stmt->execute(array($nom, $pass));
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
   
    