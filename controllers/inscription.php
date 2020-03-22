<?php
session_start();

// permet de ce connecter à la base de donner
$bdd = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
$name = strtolower($_POST['name']);
$skill = strtolower($_POST['skill']);
$psw = md5($_POST['psw'] );
$vPsw=md5($_POST['vPsw'] );
if ($psw==$vPsw) {
    // prépare et exectue la requette sql 
    $sth = $bdd -> prepare("INSERT INTO users (name, description, password) VALUES (:name, :skill , :psw)");
    
    // pour eviter les injection de code
    $sth -> bindParam(':name', $name);
    $sth -> bindParam(':skill', $skill);
    $sth -> bindParam(':psw', $psw);
    $sth->execute();
    $insertId=$bdd -> prepare("SELECT id FROM users ORDER BY id DESC LIMIT 1");
    $insertId->execute();
    $idInscription = $insertId->fetchall(PDO::FETCH_ASSOC);
    
    
    $_SESSION['idLog']=$idInscription[0]['id'];
    $_SESSION['name']=$_POST['name'];
    
    
    
    header('Location: /'); die;
    
}

$_SESSION['error']=false;
header('Location: /login.php');
