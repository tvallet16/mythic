<?php
include_once 'getAllUsers.php';

// cette page est une page blache ou il n'y a iren mais c'est juste pour pouvoiur sauvgarder et modifier des informations

// initialise la variable session. il faut toujours l'initialiser avant de l'utiliser
session_start();
$_SESSION['error']=true;
$name=$_POST['name'];
$psw=md5($_POST['psw']);

foreach ($users as $user){
    if ($user['name']==$name && $user['password']==$psw) {
        $_SESSION['idLog']=$user['id'];
        $_SESSION['name']=$_POST['name'];
        header('Location: /'); die;
    }
}
$_SESSION['error']=false;
header('Location: /login.php');


