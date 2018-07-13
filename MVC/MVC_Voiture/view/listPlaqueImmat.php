<?php

while ($plaqueImmat = $plaquesImmat->fetch())
    {
    echo $plaqueImmat["plaque_immat"]."<br>";
    }
$plaquesImmat->closecursor();