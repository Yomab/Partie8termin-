<?php
session_start(); // On démarre la session AVANT toute chose
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice2partie8</title>
                <link rel="stylesheet" href="style.css" />

    </head>
    <body>
       <div class="background">
        <p class="rebon"><b>Re-bonjour !</b></p>
    <p class="acceuil ">
        Je me souviens de toi ! Tu t'appelles <b><?php echo $_SESSION['lastname'] . ' ' . $_SESSION['firstname']; ?></b> !<br /></p>
    <p class="bjr">   Et ton âge hummm... Tu as<b> <?php echo $_SESSION['age']; ?></b> ans, c'est ça ? :-D
    </p>
       </div>
    </body>
</html>