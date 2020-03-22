<?php session_start()?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">

        <title>Mythic</title>
    </head>

    <body>
        <!-- permet d'introduire un bout de code qu'on a ranger dans template -->
        <?php include_once 'templates/header.php' ?>

    <main>

        <div class="flex caracters">
            <div class="  caracter"> diablo cow <br> <img class="caracterImg" src="img/cow.jpg" alt="diablo2"> </div>
            <div class=" flex caracter"> <p> un personnage tres attachant qui vous suivra partout ou vous irez. en revanche ne vous arretez pas</p></div>
    
            <div class=" flex caracter"> <p> une aventurière hors pair qui saura raviver votre flamme grace à ses courbes avantageuse</p></div>
            <div class="  caracter"> lara croft <br> <img class="caracterImg" src="img/lara.jpg" alt="laraCroft"></div>
    
            <div class=" caracter"> borderglan <br> <img class="caracterImg" src="img/boderland.jpg" alt="borderland"></div>
            <div class=" flex caracter"> ce personnage un peut limiter ce donne du mal pour une cause encore inconue. il vie au jour le jour en combatant les probleme de ça vie</div>
    
            <div class=" flex caracter"> cet être très amusant saura vous surprendre à des moments innopinés. il vout fera rire en continue</div>
            <div class=" caracter"> culbutoke <br> <img class="caracterImg" src="img/culbutoke.png" alt="pokemon" ></div>
        </div>
    </main>
    </body>
</html>