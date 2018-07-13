<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div id="card1" class="card text-white bg-primary mb-3">
  <div class="card-header">Film
  <span class="badge badge-light"><?php
    $nbFilms = $nbFilm->fetch();
    echo $nbFilms["nbfilm"];
    
    ?></span>
  </div>
   
  <div class="card-body">
     <i class="fas fa-film fa-2x"> <?php
    echo $nbFilms["nbfilm"];
    $nbFilm->closecursor();
    ?></i>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Genre</div>
  <div class="card-body">
 <i class="fas fa-video fa-2x"></i>
    
  </div>
</div>

<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Realisateur</div>
  <div class="card-body">
 <i class="fas fa-user-circle fa-2x"></i>
    
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Acteur</div>
  <div class="card-body">
    <i class="fas fa-users fa-2x"></i>
    
  </div>
</div>
