<?php

require_once 'modl/VoitureManager.php';


function getPlaqueImmat(){
    $voitureManger = new VoitureManager();
    $plaquesImmat = $voitureManger->getPlaqueImmat();
    require "view/listPlaqueImmat.php";
}