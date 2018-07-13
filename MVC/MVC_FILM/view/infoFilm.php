<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/styleInfo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<?php
echo "<a href=index.php >Reveni à la liste des films</a>";
echo  "<H1> Information du Film</H1>";
while ($infoduFilms = $infoduFilm->fetch())
    {
    
    echo "<p id='titre'><strong>Titre : ".$infoduFilms["titre"]."</strong></p>";
    echo getnote($infoduFilms["note"]);
    echo "<p>".$infoduFilms["annee"]."</p>";
    echo "<p>".$infoduFilms["duree_film"]."</p>";
    echo "<p>".$infoduFilms["Realisateur"]."</p>";
    echo "<p>".$infoduFilms["synopsis"]."</p>";
    echo "<p>".$infoduFilms["genre"]."</p>";
    }
$infoduFilm->closecursor();
echo "<table>";
while ($infoFilmCastings = $infoFilmCasting->fetch())
    {
    echo "<tr><td>".$infoFilmCastings["Acteur"]."</td>";
    echo "<td>[".$infoFilmCastings["sexe"]."]</td>";
    echo "<td>".$infoFilmCastings["role"]."</td>";
 
    }
$infoFilmCasting->closecursor();

function getnote($nb){
    $nbFinal=round($nb/2);
  for($j = 1; $j <= $nbFinal; $j++)
              {
       echo '<i class="fas fa-grin-stars fa-2x plein"></i>';
              }
      for($i = $nbFinal+1; $i <= 5; $i++)
         {
       echo '<i class="far fa-dizzy fa-2x vide"></i>';
              }
      
              }
              
 

