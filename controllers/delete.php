<?php
session_start();

    $bdd = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
    
    $id=$_POST['id'];
    if ($id==$_SESSION['idLog']) {
        session_destroy();
    }
    
    $sth = $bdd -> prepare("DELETE FROM users where id=:id");
    $sth-> bindParam(':id', $id);
    $sth->execute();

    
    header('Location: /users.php');



