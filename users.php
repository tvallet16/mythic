<?php 
session_start();
include_once 'controllers/getAllUsers.php';
if (isset($_SESSION['name'])) {
    
    $bdd1 = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
    $idLog=$_SESSION['idLog'];
    $sth1 = $bdd1 -> prepare("SELECT status FROM users,roles WHERE users.id='$idLog' and users.roles=roles.id ");
    $sth1->execute();
    $roles = $sth1->fetchall(PDO::FETCH_ASSOC);
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include_once 'templates/header.php' ?>
    </header>
    <!-- teste super Admin -->
    <?php if (isset($_SESSION['name'])) :?>
        <?php if($roles[0]['status'] == 'super admin') : ?>
        <table>
            <tr>
                <th>nom</th>
                <th>description</th>
                <th>modifier</th>
                <th>supression</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr class="ligne">
                    
                    <td><?= $user['name']; ?> </td>
                    <td><?= $user['description'] ?></td>
                    <td>
                    <form action="formUpdate.php" method="POST">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="submit" value="modifier">
                    </form>
                    </td>
                    <td>
                    <form action="controllers/delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="submit" value="X">
                    </form>
                    </td>
                    
                </tr>
            <?php  endforeach ?>
            
        </table>
    <!-- teste  Admin -->
    <?php elseif ($roles[0]['status'] == 'admin'):?>
        <table>
            <tr>
                <th>nom</th>
                <th>description</th>
                <th>modifier</th>
                <th>supression</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <?php if ($user['roles'] != 1): ?>
                    <tr class="ligne">
                    
                        <td><?= $user['name']; ?> </td>
                        <td><?= $user['description'] ?></td>
                        <td>
                        <form action="formUpdate.php" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input type="submit" value="modifier">
                        </form>
                        </td>
                        <td>
                        <form action="controllers/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input type="submit" value="X">
                        </form>
                        </td>
    
                    </tr>
                <?php endif ?>
            <?php  endforeach ?>
            
        </table>
    <!-- teste normal users -->  
    <?php else : ?>
        <table>
            <tr>
                <th>nom</th>
                <th>description</th>
                <th>modifier</th>
                <th>supression</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <?php if ($user['id']==$idLog): ?>
                    <tr class="ligne">
                    
                        <td><?= $user['name']; ?> </td>
                        <td><?= $user['description'] ?></td>
                        <td>
                        <form action="formUpdate.php" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input type="submit" value="modifier">
                        </form>
                        </td>
                        <td>
                        <form action="controllers/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input type="submit" value="X">
                        </form>
                        </td>
                    
                    </tr>
                <?php endif ?>
            <?php  endforeach ?>
        <?php endif ?>
    <?php else: ?>
        <h1>merci de vous connectez pour avoir la liste de utilisateur</h1>
    <?php endif?>
</body>
</html>
