<?php

    class Pokemon{
        
        private $_nom;
        private $_type;
        private $_level;
        private $_HP;
        private $_ATQ;
        private $_statut = "en vie";
        private $_message = "";
        private $_img;
        private $_HPMAX;

        
        const MAX_LEVEL = 100;
        
        
        public function __construct($img,$type, $nom, $hp = 50,$HPMAX=100, $atq=10, $level = 1){
            $this->_HP = $hp;
            $this->_type = $type;
            $this->_ATQ = $atq;
            $this->_level = $level;
            $this->_nom = $nom;
            $this->_img = $img;
            $this->_HPMAX = $HPMAX;
        }
         public function attaquer($adv){
           if ($this->_HP > 0) {
            $attaque = rand($this->_ATQ-(0.3*$this->_ATQ),$this->_ATQ+(0.3*$this->_ATQ) );
            $adv->prendDegat($attaque);
            $this->_message .= $this->_nom." attaque et fait ".$attaque." degats <br> ";
                if ($this->_HP <= 0){
         
                    $this->_message .= $this->_nom.' est KO';
                }
            }
            }
   
        public function prendDegat($degat){
            $this->_HP = $this->_HP-$degat;
            if ($this->_HP <= 0) {
                $this->_statut ="KO";
                $this->_message .= $this->_nom.' est KO'; 
            }
        }
        public function getMessage() {
            return $this->_message;
        }

        public function augmenterNiveau(){
            if($this->_level < self::MAX_LEVEL){
                $this->_level++;
            }
        }
        public function __toString() {
             $msg = $this->_message;
             $this->_message = "";
             return $msg;
        }
        public function getStatut() {
            return $this->_statut ;
        }
        public function getNom() {
            return $this->_nom;
        }
        function getImg() {
            return $this->_img;
        }
        function getHP() {
            return $this->_HP;
        }

        function getHPMAX() {
            return $this->_HPMAX;
        }


    }
    