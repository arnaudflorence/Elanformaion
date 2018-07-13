<?php
    // démarre une session au chargement de la page
    // ou récupère la session précédente
    require_once("app/frontController.class.php");
    //instancie le service s'occupant de la session et le front controller (s'occupant du reste)
    $front = new FrontController();
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title>Site de Roger</title>
        <script src="jquery.js"></script>
    </head>
    <body>
        <section id="container">
            <header>
                <?php include $front->render("menu"); ?>
            </header>
            <p id="message">
                <?php echo $front->getSession()->getMessage(); ?>
            </p>
            <main class="wrapper">
                <?php      
                   include $front->render($front->getPage());
                ?>
            </main>
        </section>
        <footer>
            <p class="wrapper">©2018 - WESH</p>
        </footer>
        <script>
            $(document).ready(function(){
                var text = $.trim($('#message').text());
                if(text != ""){
                    $("#message").fadeIn(2000).slideUp(2000);
                }
            });
        </script>
    </body>
    
</html>