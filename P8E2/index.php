<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['lastname'] = 'roger';
$_SESSION['firstname'] = 'Rabbit';
$_SESSION['age'] = 24;
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
    <p class="bjr"> Salut <?php echo $_SESSION['lastname']; ?> !<br /><p>
    <p class="acceuil ">Ici, tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page?</p>
    <p class="link">
        <a  href="info.php">Lien vers info.php</a><br />
    </p>
        </div>
    </body>
</html>