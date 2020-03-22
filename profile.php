<?php 
    session_start();
    if (isset($_SESSION['name'])) {
        $bdd = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
        $idLog=$_SESSION['idLog'];
        $sth = $bdd -> prepare("SELECT profil_picture, profil_text FROM users WHERE id=$idLog ");
        $sth->execute();
        $users = $sth->fetchall(PDO::FETCH_ASSOC);
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/profil.css">
        <link rel="stylesheet" href="./css/style.css">


        <link rel="shortcut icon" href="img/meetic.ico" type="image/x-icon">
        <title>Mythic | Login</title>
    </head>

    <body>
        <header>
            <?php include_once 'templates/header.php' ?>
        </header>

        <main >

            <form action="controllers/profilchecked.php" method="post">
                <label for="picture">afficher l'image?</label>
                <input type="checkbox" name="picture" id="" <?= ($users['0']['profil_picture'] == 'on') ? 'checked' : '' ?>>

                <label for="picture">afficher le text?</label>
                <input type="checkbox" name="text" id="" <?= ($users['0']['profil_text'] == 'on') ? 'checked' : '' ?>>
                <input type="submit" value="modifier">

            </form>



            

        </main>


    </body>
</html>