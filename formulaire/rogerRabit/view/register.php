<h1>INSCRIPTION</h1>

<form id="form" method="post" action="index.php?page=register&action=register">
    <input placeholder="Choisir un pseudo..." type="text" name="nom"
       value="<?php if(isset($keepname)){ echo $keepname;}?>"    
    ><br>
    <input placeholder="Choisir un mot de passe..." type="password" name="pass1"><br/>
    <input placeholder="Répéter le mot de passe..." type="password" name="pass2"><br/>
    <input type="submit" value="Inscription">
</form>