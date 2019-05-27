<?php
setcookie('pseudo', 'roger', time() + 365*24*3600, '/', 'phpexercice', false, true); // On écrit un cookie
setcookie('password', 'trempette', time() + 365*24*3600, '/', 'phpexercice', false, true); // On écrit un autre cookie...
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice3partie8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="background">
     <p class="bjr">Hé ! Je me souviens de toi !<br /></p>
     <p class="acceuil"> Ton pseudo est <b><?php echo $_COOKIE['pseudo']; ?></b> et ton mot de passe est <b><?php echo $_COOKIE['password']; ?></b> c'est bien ça ?
</p>  
        </div>
    </body>
</html>    