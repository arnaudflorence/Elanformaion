<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
    </head>   
<body>
    <div id="main_wrapper">
<?php
echo '<div id=navbar><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Liste des films</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a id="connect" href="#">Conection</a></li>
    </ul>
    <button class="btn btn-danger navbar-btn">Card</button>
  </div>
</nav></div>';
?>
        <div id="wrapper_table">
            <div class="card">
                <div class="card-body">

                    <!--Table-->
                    <table class="table table-hover table-responsive-md table-fixed">

                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Année</th>
                                <th>Durée</th>
                                <th>Réalisateur</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                       <?php
                        while ($listTotalFilms = $listTotalFilm->fetch()){
                                echo "<tbody><tr><th scope='row'>".$listTotalFilms['titre']."</th>";
                                echo "<td>".$listTotalFilms["annee"]."</td>";
                                echo "<td>".$listTotalFilms["duree_film"]."</td>";
                                echo "<td>".$listTotalFilms["Realisateur"]."</td>";
                        echo "<td><a href=index.php?action=infoFilm&amp;idFilm=".$listTotalFilms["ID_FILM"].">Info film</a></td></tr></tbody>";}
                        $listTotalFilm->closecursor();

                        ?>
                    </table>
                    <!--Table-->

                </div>
            </div>
        </div>
    </div>
</body>
</html>

