<?php

session_start();

if (!isset($_SESSION['ecran'])) {
    $_SESSION['ecran'] = "";
}
if (!isset($_SESSION['operation'])) {
    $_SESSION['operation'] = "";
}

$btns = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "on", "egal", "multip",
    "moins", "plus", "div");

if (isset($_GET['btn']) && !empty($_GET['btn'])) {
    if ($_GET['btn'] == "on") {
        session_destroy();
        echo '0';
    } elseif ($_GET['btn'] == "egal") {
        if (empty($_SESSION['operation'])) {
            echo "error";
        } else {
            eval("echo " . $_SESSION['operation'] . ";");
            session_destroy();
        }
    } elseif ($_GET['btn'] == "plus") {
        $_SESSION['operation'] .= "+";
        $_SESSION['ecran'] = "";
        echo '0';
    } elseif ($_GET['btn'] == "moins") {
        $_SESSION['operation'] .= "-";
        $_SESSION['ecran'] = "";
        echo '0';
    } elseif ($_GET['btn'] == "multip") {
        $_SESSION['operation'] .= "*";
        $_SESSION['ecran'] = "";
        echo '0';
    } elseif ($_GET['btn'] == "div") {
        $_SESSION['operation'] .= "/";
        $_SESSION['ecran'] = "";
        echo '0';
    } elseif (in_array($_GET ['btn'], $btns)) {
        $_SESSION['operation'] .= $_GET['btn'];
        $_SESSION['ecran'] .= $_GET['btn'];
        echo $_SESSION['ecran'];
    } else
        echo "error";
} else
    echo "0";
