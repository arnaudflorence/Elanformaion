<?php

require "model/userModel.class.php";

class UserController{
        
    private $usermodel;
    private $user = false;

    public function __construct() {
        $this->usermodel = new UserModel();
    }

    public function login($data){
                
        $nom = htmlentities($data['nom']); 
        $pass = htmlentities($data['pass']);
        
        if(!empty($nom) && !empty($pass)){

            if($this->user = $this->usermodel->selectUser($nom, $pass)){
                //l'utilisateur est créé en session
                //avec comme info le nom renseigné
                //dans le formulaire
                
                $msg = "Bienvenue ".$this->user['pseudo_user'];
            }
            else $msg = "Le nom ou le mot de passe ne correspondent pas !";
        }
        //si je viens bien du formulaire (après validation)
        //mais qu'aucun champ n'a été renseigné ou un des deux
        else $msg = "Veuillez remplir le formulaire avant de le valider...";
        
        return array(
            "user" => $this->user,
            "msg" => $msg
        );
    }
    
    public function register($data){
        
        $nom = htmlentities($data['nom']); 
        $pass1 = htmlentities($data['pass1']);
        $pass2 = htmlentities($data['pass2']);

        if(!empty($nom) && !empty($pass1) && !empty($pass2)){
            if(!$this->usermodel->checkUser($nom)){
                if($pass1 === $pass2){

                    //si l'ajout d'un utilisateur a fonctionné
                    if($this->usermodel->createUser($nom, $pass1) == true){
                        //on le sélectionne et l'affecte dans le paramètre user
                        $this->user = $this->usermodel->selectUser($nom, $pass1);
                        $msg = "Félicitations, vous êtes inscrit, ".$nom;
                    }
                    else $msg = "Un problème technique est survenu, toutes nos excuses !";
                }
                else $msg = "Les deux mots de passe sont différents, réessayez!";
            }
            else $msg = "Ce nom d'utilisateur existe déjà, changez-en!";
        }
        else $msg = "Veuillez remplir le formulaire avant de le valider...";
        
        return array(
            "user" => $this->user,
            "msg" => $msg
        );
    }
    
    public function logout(){
        return "Vous êtes bien déconnecté";
    }
    
}
