<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>tamaman</title>
    </head>
    <body>
        <div id="fond"></div>

        <div id="wrapper">

            <article>
                <form>
                    <h1>Déjà inscris ?</h1><br/>

                    <input id="connection" type="reset" value="connection">
                </form>

            </article>


            <aside>

                <div id='droite'>
                    <?php
                    if (isset($_SESSION['errors'])) {
                        echo '<p id="errors" style="color:red;">';
                        echo $_SESSION['errors'];
                        echo "</p>";
                    }
                    ?>

                    <form action="traitement.php" method="post" >

                        <h1>Inscription</h1><br/>
                        <input placeholder="Votre prenom (facultatif)" type="text" name="prenom" /><br/>
                        <input placeholder="Votre nom" type="text"  name="*nom" required/><br/>

                        <input type="email" name="*email" placeholder="E-mail ..." required/><br/>
                        <input type="password" name="*pass" placeholder="Password ..." required/><br/>
                        <input type="password" name="*pass-repeat" placeholder="Repeat Password ..." required/><br/>

                        <label type='checkbox'>
                            Etes-vous :
                            <select name="liste*">
                                <option value="0">Choisir...</option>
                                <option value="male">Un homme</option>
                                <option value="femelle">Une femme</option>
                            </select>
                        </label><br/>
                        <label for="CGU">Veuillez valider les conditions général de vente<input id="CGU" type="checkbox" name="CGU" required /></label><br/>
                        <input id="Valider" type="submit" value="Envoyer">
                        <input id="Annuler" type="reset" value="Annuler">

                    </form>
                </div>
            </aside>
        </div>
        <script>
               function menu(bouton, menu, time){     
       $(bouton).click(function(e) {
           e.stopPropagation();
              if ($(menu).is(":visible")) {
                  $(menu).slideUp(time);
                  $(bouton).removeClass("fa-times");
           } else {
                  $(menu).slideDown(time);
                  $(bouton).addClass("fa-times");
             }
           });}
            </script>
</body>
</html>
            <?php
            session_destroy();
            ?>