<?php


session_start();

if (!isset($_SESSION['symbole'])){
         $_SESSION['symbole'] = array("","","","","","","","","");
            } 

 if(isset($_GET['restart'])){
    unset($_SESSION['symbole']);
}


$joueur="1";
echo "c'est au tour du joueur : ".$joueur; 

if (isset($_GET['btn'])){
    if ($joueur == "1"){

            switch ($_GET['btn']) {
                
            case 0:
                $_SESSION['symbole'][0] ='X';
                $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;

            case 1 :
                $_SESSION['symbole'][1] ='X';
               $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 2:
                $_SESSION['symbole'][2] ='X';
            $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 3 :
                $_SESSION['symbole'][3] ='X';
          $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 4:
                $_SESSION['symbole'][4] ='X';
             $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 5:
                $_SESSION['symbole'][5] ='X';
                $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 6:
                $_SESSION['symbole'][6] ='X';
               $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 7:
                $_SESSION['symbole'][7] ='X';
                $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 8:
                $_SESSION['symbole'][8] ='X';
                $joueur="2";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            } 
        }    

  else if ($joueur == "2"){
        
            

           echo "c'est au tour du joueur : ".$joueur;
           if (isset($_GET['btn'])){

            switch ($_GET['btn']) {
                
            case 0:
                $_SESSION['symbole'][0] ='O';
                $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;

            case 1 :
                $_SESSION['symbole'][1] ='O';
                $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 2:
                $_SESSION['symbole'][2] ='O';
                $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 3 :
                $_SESSION['symbole'][3] ='O';
                 $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 4:
                $_SESSION['symbole'][4] ='O';
               $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 5:
                $_SESSION['symbole'][5] ='O';
               $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 6:
                $_SESSION['symbole'][6] ='O';
              $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 7:
                $_SESSION['symbole'][7] ='O';
             $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            case 8:
                $_SESSION['symbole'][8] ='O';
                $joueur="1";
                echo "c'est au tour du joueur : ".$joueur;
                break;
            } 
           }  

        }}
  
  


var_dump($_SESSION['symbole']);
echo $joueur;

?>

<!DOCTYPE html>

<html>
    <head>
        
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    

        <title></title>
    </head>
    <body>
 
        <div id="fond"></div>
        <h1>Morpion</h1>
        <div id="content">
    
    <div id="ligne">   
        <a href="tictactoe.php?btn=0"><?php echo $_SESSION['symbole'][0]; ?></a>      
        <a href="tictactoe.php?btn=1"><?php echo $_SESSION['symbole'][1]; ?></a>        
        <a href="tictactoe.php?btn=2"><?php echo $_SESSION['symbole'][2]; ?></a>
    </div> 
     
    <div id="ligne">  
        <a href="tictactoe.php?btn=3"><?php echo $_SESSION['symbole'][3]; ?></a>       
        <a href="tictactoe.php?btn=4"><?php echo $_SESSION['symbole'][4]; ?></a>        
        <a href="tictactoe.php?btn=5"><?php echo $_SESSION['symbole'][5]; ?></a>
    </div> 
     
    <div id="ligne">  
        <a href="tictactoe.php?btn=6"><?php echo $_SESSION['symbole'][6]; ?></a>       
        <a href="tictactoe.php?btn=7"><?php echo $_SESSION['symbole'][7]; ?></a>        
        <a href="tictactoe.php?btn=8"><?php echo $_SESSION['symbole'][8]; ?></a>
    </div>  

            <a class="clear" href="tictactoe.php?btn=restart">C</a>
    
               
            <script>
        $(document).ready(function(){
            $("a:not(.clear)").each(function(i,e){
                if($(this).text() != ""){
                    $(this).removeAttr("href");
                }
            });
        });
    </script>
    </body>
</html>
