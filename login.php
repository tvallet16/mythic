<?php session_start();  ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="shortcut icon" href="img/meetic.ico" type="image/x-icon">
        <title>Mythic | Login</title>
    </head>

    <body>
        <header>
            <?php include_once 'templates/header.php' ?>
        </header>

        <main >
            <div class="form">
                <div class="flex ">
                    <form action="./controllers/log.php" method="POST" class="flex form1">
                        <label for="name"> Votre nom de guerrier : </label>
                        <input type="text" name="name"  value='baboski' class="name">
                        <label for="psw"> entrez un mots de passe : </label>
                        <input type="password" name="psw"  value='1234' class="name">
                        <?php
                            if (isset($_SESSION['error']) && $_SESSION['error']==false  ) {
                                echo "<p> erreur dans le nom ou le mot de passe, veulliez recomencer";
                            }
                        
                        ?><br>
                        <input type="submit" value="Let's go! " id="submit">
                        <p class="sing-in">clicker ici pour vous inscrire</p>

                    </form>
                </div>

                <div class=" flex">
                    <form action="controllers/inscription.php" method="POST" class="flex form2 none">
                        <label for="name"> entrez votre nom de guerrier : </label>
                        <input type="text" name="name"  value='baboski' class="name">
                        <label for="skill"> entrez votre capacitée spéciale : </label>
                        <input type="text" name="skill"  value='teleportation' class="name">
                        <label for="psw"> entrez un mots de passe : </label>
                        <input type="password" name="psw"  value='1234' class="name">
                        <label for="vPsw"> vérification du mots de passe : </label>
                        <input type="password" name="vPsw"  value='1234' class="name">
                        <?php if (isset($_SESSION['error']) && $_SESSION['error']==false  ) {
                                echo "<p> les deux mots de pass ce corresponde pas </p>";
                            }
                        ?>
                        


                        <input type="submit" value="je m'inscrit " id="submit">
                    </form>
                </div>
            </div>
            

        </main>

    <script src="js/script.js"></script>
    </body>
</html>