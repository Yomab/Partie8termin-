<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice5partie8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="background">
           <?php $_COOKIE['pseudo']='Bernard';
           ?>
     <p class="bjr">Hé ! Je me souviens de toi !<br /></p>
     <p class="acceuil"> Ton pseudo est <b><?= $_COOKIE['pseudo']; ?></b> et ton mot de passe est <b><?= $_COOKIE['password']; ?></b> c'est bien ça ?
</p>  
        </div>
    </body>
</html>   