
<nav class="wrapper">
    <ul>  
        <li><a href="index.php?page=home">Accueil</a></li>
        <?php
            
            if($front->getSession()->hasUser()){
                ?>
                <li><a href="index.php?page=account">Mon Compte</a></li>
                <li><a href="index.php?action=logout">Déconnexion</a></li>
                <?php
            }
            else{
                ?>
                <li><a href="index.php?page=register">Inscription</a></li>
                <?php
            }
        ?>
            
    </ul>
</nav>
