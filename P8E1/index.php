<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice1Partie8</title>
        <link rel="stylesheet" href="style.css" />  
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Pacifico&display=swap" rel="stylesheet">


    </head>
    <body>
        <h1>Vos Informations</h1>
        <div class="form">
            <?php
            $useragent = $_SERVER ['HTTP_USER_AGENT'];
            echo "<p><b>Your User Agent is</b></p>: " . $useragent;

            $IPadress = $_SERVER['REMOTE_ADDR'];
            echo "<p><b>Your I.P Adress is</b></p>:" . $IPadress;

            $Server = $_SERVER ['SERVER_NAME'];
            echo "<p><b> Your Name Server is</b></p>" . $Server;
            ?>


        </div>
    </body>   
</html>