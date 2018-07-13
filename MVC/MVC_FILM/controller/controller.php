<?php

require_once 'model/CinemaManager.php';


function getlistTotalFilm(){
    $cinema = new Cinema();
    $listTotalFilm = $cinema->getListeFilm();
    require "view/listFilm.php";
}
function getinfoDuFilm($idfilm){
    $info = new Cinema();
    $infoduFilm = $info-> getInfoFilm($idfilm);
    $infoFilmCasting = $info-> getInfoFilmCasting($idfilm);
    require "view/infoFilm.php";
}
