<?php

require_once 'model/CinemaManager.php';


function getNbdeFilm(){
    $cinema = new Cinema();
    $nbFilm = $cinema->getNbFilm();
    require "view/viewStatFilm.php";
}
