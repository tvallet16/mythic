<?php 
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
$id=$_SESSION['idLog'];

if (!isset($_POST['picture'])) {
    $sth = $bdd -> prepare("UPDATE users SET profil_picture = 'off' WHERE id='$id'");
    $sth->execute();
}else{
    $sth = $bdd -> prepare("UPDATE users SET profil_picture = 'on' WHERE id='$id'");
    $sth->execute();
}
if (!isset($_POST['text'])) {
    $sth = $bdd -> prepare("UPDATE users SET profil_text = 'off' WHERE id='$id'");
    $sth->execute();
}else{
    $sth = $bdd -> prepare("UPDATE users SET profil_text = 'on' WHERE id='$id'");
    $sth->execute();
}
header('Location: /');

