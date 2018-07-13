<!DOCTYPE html>
<html>
    <head>
        <title>Test AJAX</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    
    <body>
        <nav>
            <a href="" class="lien" choix="1">OuiOui</a>
            <a href="" class="lien" choix="2">Bob</a>
            <a href="" class="lien" choix="3">Choix 3</a>
        </nav>
        
        <em>FAITES UN CHOIX CI DESSUS</em>
        
        <article id="art" style="background-color:yellow;">
            
        </article>
        
        <script>
            $("a").click(function(elem){
                elem.preventDefault();
                
                $.get(
                    "choix.php",
                    {choix: $(this).attr("choix")},
                    function( resultat ) {
                        $("em").fadeOut(500).remove();
                        $("#art").hide().html(resultat).slideDown(1000);
                    }
                );
        
            });
        </script>
    </body>
    
</html>
