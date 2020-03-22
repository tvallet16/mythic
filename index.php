<?php session_start();

if (isset($_SESSION['name'])) {
    
    $bdd1 = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
    $idLog=$_SESSION['idLog'];
    $sth1 = $bdd1 -> prepare("SELECT profil_picture, profil_text FROM users WHERE users.id='$idLog'");
    $sth1->execute();
    $profil = $sth1->fetchall(PDO::FETCH_ASSOC);
}

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">

        <title>Mythic</title>
    </head>

    <body>
        <header>
            
            <!-- permet d'introduire un bout de code qu'on a ranger dans template -->
            <?php include_once 'templates/header.php' ?>
        </header>
        <main>
            <?php if (isset($_SESSION['name']) && $profil[0]['profil_picture']=='on') :?>
                <img id="escanor" src="img/escanor.jpg" alt="escanor">
            <?php endif ?>
            <?php if (isset($_SESSION['name']) && $profil[0]['profil_text']=='on') :?>
                <p>un bg sans précédent</p>
            <?php endif ?>
    
        </main>


    </body>
</html>