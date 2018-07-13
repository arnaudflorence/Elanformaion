<?php

require_once 'controller/controller.php';

if(isset($_GET['action'])){
    if($_GET['action']=="infoFilm"){
        getinfoDuFilm($_GET['idFilm']);
    }else{
        getlistTotalFilm();
    }
}else{
    getlistTotalFilm();
}

