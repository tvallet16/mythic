<?php
$id=$_POST['id'];

?>
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

    <main>
    <div class=" flex">
        <form action="controllers/update.php" method="POST" class="flex form2">
            <label for="name"> entrez votre nouveau nom de guerrier : </label>
            <input type="text" name="name"  value='baboski' class="name">
            <label for="skill"> entrez votre nouvelle capacitée spéciale : </label>
            <input type="text" name="skill"  value='teleportation' class="name">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="modifier " id="submit">
        </form>
    </div>
    </main>

</body>
</html>