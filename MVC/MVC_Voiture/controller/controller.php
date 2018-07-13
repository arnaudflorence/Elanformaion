<?php

require_once 'model/VoitureManager.php';


function getPlaqueImmat(){
    $voitureManger = new VoitureManager();
    $plaquesImmat = $voitureManger->getPlaqueImmat();
    require "view/listPlaqueImmat.php";
}
function getVoitureMotori(){
    $voitureManger = new VoitureManager();
    $voitureMotori = $voitureManger->getVoitureMotori();
    require "view/listVoitureMotori.php";
}